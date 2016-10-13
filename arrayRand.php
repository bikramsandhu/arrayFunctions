<?php
	$input = array("10", "20", "30", "40", "50");
	$rand_keys = array_rand($input, 2);
	echo $input[$rand_keys[0]] . "\n";
	echo $input[$rand_keys[1]] . "\n";
?>
