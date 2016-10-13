<?php
	$arr1 = array('NJIT', 'Rutgers', 'Cornell', 'NYU');
	$arr2 = array('Stevens', 'Rutgers', 'Towson', 'NJIT');
	$repeated = array_intersect($arr1, $arr2);

	print_r($repeated);
?>
