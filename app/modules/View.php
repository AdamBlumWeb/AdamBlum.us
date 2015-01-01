<?php

class View {


	public 	function 	__construct($data) {
		$this->data = $data;
		$this->make_header();
		$this->make_body();
		$this->make_footer();
	}

	private	function	make_header() {
		$header = new Snippet('header');
		$header->title = $this->data['meta']['title'];
		$header->id = $this->data['view'];
		$header->description = $this->data['meta']['description'];
		$header->load();
	}

	private function 	make_body() {
		include 	SITE.DS.'templates'.DS.$this->data['template'].'.php';
	}

	private function 	get_content() {
		return Markdown::render(file_get_contents(CONTENT.DS.$this->data['type'].DS.$this->data['view'].'.md'));
	}

	private	function	make_footer() {
		$footer = new Snippet('footer');
		$footer->load();
	}



}

?>