<?php ## Пользовательская сортировка списков.
  $tools = ["One", "Two", "Three", "Four"];
  usort($tools, function ($a, $b) { return strcmp($a, $b); });
  print_r($tools);
  // Array([0]=>Four [1]=>One [2]=>Three [3]=>Two)
?>