<?php

/*
	CORE
		this sets some basic functions for starting our application
*/

class Core {
	public 	static 	function 	load($dir, $array) {
		foreach 	($array as $file) {
			require	APP.DS.$dir.DS.$file.".php";
		}
	}
}



function 	_array_data($array) {
	echo	"\n<pre>\n";
	print_r($array);
	echo	"\n</pre>\n";
}




function _array_sort($array, $on, $order=SORT_ASC)
{
    $new_array = array();
    $sortable_array = array();

    if (count($array) > 0) {
        foreach ($array as $k => $v) {
            if (is_array($v)) {
                foreach ($v as $k2 => $v2) {
                    if ($k2 == $on) {
                        $sortable_array[$k] = $v2;
                    }
                }
            } else {
                $sortable_array[$k] = $v;
            }
        }

        switch ($order) {
            case SORT_ASC:
                asort($sortable_array);
            break;
            case SORT_DESC:
                arsort($sortable_array);
            break;
        }

        foreach ($sortable_array as $k => $v) {
            $new_array[$k] = $array[$k];
        }
    }

    return $new_array;
}

?>