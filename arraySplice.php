<?php
$rand = array("a", "b", "c", "d", "e");

$output = array_slice($input, 2);      // returns "c", "d", and "e"
$output1 = array_slice($input, -2, 1);  // returns "d"

print_r($output);
print_r($output1);
?>
