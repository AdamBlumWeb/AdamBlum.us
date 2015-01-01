<?php


class Markdown {
	public static $rules = array (
		'/\n(#+) (.*)/' => 'self::header',                           // headers
		'/\!\[([^\[]+)\]\(([^\)]+)\)(?:\{(\w*)\})?/' => 'self::image',
		'/```\n([\s\S]*?)```\n/' => 'self::pre',
		'/\[([^\[]+)\]\(([^\)]+)\)(?:\{(\w*)\})?/' => '<a class=\'\3\' href=\'\2\'>\1</a>',  // links
		'/(\*\*|__)(.*?)\1/' => '<strong>\2</strong>',            // bold
		'/(\*|_)(.*?)\1/' => '<em>\2</em>',                       // emphasis
		'/\~\~(.*?)\~\~/' => '<del>\1</del>',                     // del
		'/\^\((.+)\)/' 		=> '<sup>\1</sup>',
		'/_\((.+)\)/' 		=> '<sub>\1</sub>',
		'/\:\"(.*?)\"\:/' => '<q>\1</q>',                         // quote
		'/\:(.*?)\:(?:\"(.*?)\")?/' => '<abbr title=\'\2\'>\1</abbr>',                         // quote
		'/`(.*?)`/' => '<code>\1</code>',                         // inline code
		'/\n\*(.*)/' => 'self::ul_list',                          // ul lists
		'/\n\-(.*)/' => 'self::ul_list',                          // ul lists
		'/\n[0-9]+\.(.*)/' => 'self::ol_list',                    // ol lists
		'/\n(&gt;|\>)(.*) --(.+)/' => 'self::blockquote',               // blockquotes
		'/\n-{5,}/' => "\n<hr />",                                // horizontal rule
		'/\n([^\n]+)\n/' => 'self::para',                         // add paragraphs
		'/<\/ul>\s?<ul>/' => '',                                  // fix extra ul
		'/<\/ol>\s?<ol>/' => '',                                  // fix extra ol
		'/---/' => '&mdash;',
		'/--/' => '&ndash;',
		'/<\/blockquote><blockquote>/' => "\n"                    // fix extra blockquote
	);

	private static function para ($regs) {
		$line = $regs[1];
		$trimmed = trim ($line);
		if (preg_match ('/^<\/?(ul|ol|li|h|p|bl|pre|figure|figcaption)/', $trimmed)) {
			return "\n" . $line . "\n";
		}
		return sprintf ("\t\n<p>%s</p>\n", $trimmed);
	}

	private static function ul_list ($regs) {
		$item = $regs[1];
		return sprintf ("\n<ul>\n\t<li>%s</li>\n</ul>", trim ($item));
	}

	private static function ol_list ($regs) {
		$item = $regs[1];
		return sprintf ("\n<ol>\n\t<li>%s</li>\n</ol>", trim ($item));
	}

	private static function pre ($regs) {
		$item = $regs[1];
		$item = htmlspecialchars($item);
		return sprintf ("\n<pre>%s</pre>\n", trim ($item));
	}

	private static function blockquote ($regs) {
		$item = $regs[2];
		$author = $regs[3];
		return sprintf ("\n<blockquote>%s<span>%s</span></blockquote>", trim($item), trim($author));
	}

	private static function header ($regs) {
		list ($tmp, $chars, $header) = $regs;
		$level = strlen ($chars);
		return sprintf ('<h%d>%s</h%d>', $level, trim ($header), $level);
	}

	private static function image($regs) {
		$alt = trim($regs[1]);
		$src = $regs[2];
		$class = $regs[3];
		return "<figure class='$class'>\n\t<img src='$src' alt='$alt'/>\n\t<figcaption>\n\t\t<p>$alt</p>\n\t</figcaption>\n</figure>";
	}


	public static function render ($text) {
		$text = "\n" . $text . "\n";
		foreach (self::$rules as $regex => $replacement) {
			if (is_callable ( $replacement)) {
				$text = preg_replace_callback ($regex, $replacement, $text);
			} else {
				$text = preg_replace ($regex, $replacement, $text);
			}
		}
		return trim ($text);
	}
}
?>