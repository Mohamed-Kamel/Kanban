<?php

function load_view($file, $data = []){
	ob_start();
	
	include_once($file);
	
	$buffer = ob_get_contents();
	ob_end_clean();
	
	return $buffer;
}
