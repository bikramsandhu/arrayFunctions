<?php
	$somethingDontBelong = array('NJIT', 'Rutgers', 'Stevens', 'cactus');
	$colleges = array_pop($somethingDontBelong);
	#THE POP FUNCTION PUTS THE LAST ELEMENT CACTUS INTO A NEW ARRAY CALLED COLLEGES
	print_r($somethingDontBelong);
?>
