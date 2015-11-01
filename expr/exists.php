<?php ## Оператор ??
  $x = NULL;
  $y = NULL;
  $z = 3;
  var_dump($x ?? $y ?? $z); // int(3)
?>