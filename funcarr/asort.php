<?php ## Сортировка массива по значениям.
  $A = [
    "a" => "Zero",
    "b" => "Weapon",
    "c" => "Alpha",
    "d" => "Processor"
  ];
  asort($A);
  print_r($A);
  // Array([c]=>Alpha [d]=>Processor [b]=>Weapon [a]=>Zero)
  // как видим, поменялся только порядок пар ключ=>значение
?>