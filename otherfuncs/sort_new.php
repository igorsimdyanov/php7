<?php ## Использование оператора <=>.
  $fruits = ["orange", "apple", "apricot", "lemon"];
  usort($fruits, function($a, $b) { return $b <=> $a; });
  foreach ($fruits as $key => $value) echo "$key: $value<br />\n";
?>