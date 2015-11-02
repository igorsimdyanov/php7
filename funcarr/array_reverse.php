<?php ## Переворачивание массива.
  $A = [
    "a" => "Zero",
    "b" => "Weapon",
    "c" => "Alpha",
    "d" => "Processor"
  ];
  asort($A);
  $A = array_reverse($A);
  print_r($A);
  // Array([a]=>Zero [b]=>Weapon [d]=>Processor [c]=>Alpha)
?>