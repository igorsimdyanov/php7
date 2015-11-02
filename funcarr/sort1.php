<?php ## Сортировка списков (случай ассоциативного массива).
  $A = [
      "a" => "Zero",
      "b" => "Weapon",
      "c" => "Alpha",
      "d" => "Processor"
    ];
  sort($A);
  print_r($A);
  // Array([0]=>Alpha [1]=>Processor [2]=>Weapon [3]=>Zero)
?>