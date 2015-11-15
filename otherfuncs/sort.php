<?php ## Новый подход создания анонимных функций.
  $fruits = ["orange", "apple", "apricot", "lemon"];
  usort($fruits, function($a, $b) { return strcmp($b, $a); });
  foreach ($fruits as $key => $value) echo "$key: $value<br />\n";
?>