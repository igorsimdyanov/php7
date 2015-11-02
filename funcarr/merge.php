<?php ## Объединение множеств.
  $native = ["green", "red", "blue"];
  $colors = ["red", "yellow", "green", "cyan"];
  $inter = array_unique(array_merge($colors, $native));
  print_r($inter);
  // Array([0]=>red [1]=>yellow [2]=>green [3]=>cyan [6]=>blue) 
?>