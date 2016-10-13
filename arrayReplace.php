<?php
	$original = array("10","20","30","40","50");
	$replace1 = array(0 => "zebra", 3 => "koala");
	$replace2 = array(5 => "giraffe");

	$newArr = array_replace($original, $replace1, $replace2);
	print_r($newArr);
?>
