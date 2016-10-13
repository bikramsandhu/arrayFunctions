<?php
	$arr = array('chunk1', 'chunk2', 'chunk3');
	#adding elements to the right
	$newArr = array_pad($arr, 5, 2);
	print_r($newArr);
	echo '<br>';
	#adding elements to the left
	$anotherOne = array_pad($arr, -5, 'idk');
	print_r($anotherOne);
?>
