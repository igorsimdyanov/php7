<?php ## Пересечение множеств.
  $native = ["green", "red", "blue"];
  $colors = ["red", "yellow", "green", "cyan", "black"];
  $inter = array_intersect($colors, $native);
  print_r($inter);
  // Array([0]=>red  [2]=>green) 
?>