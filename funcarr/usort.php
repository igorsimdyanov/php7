<?php ## ѕользовательска€ сортировка списков.
function fCmp($a, $b) { return strcmp($a, $b); }
$tools = array("One", "Two", "Three", "Four");
usort($tools, "fCmp");
print_r($tools);
// Array([0]=>Four [1]=>One [2]=>Three [3]=>Two)
?>