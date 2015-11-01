<?php ## Пересечение множеств.
$native = array("green", "red", "blue");
$colors = array("red", "yellow", "green", "cyan", "black");
$inter = array_intersect($colors, $native);
print_r($inter);
// Array([0]=>red  [2]=>green) 
?>