<?php ## Генераторы возвращают объект класса Generator
  function simple($from = 0, $to = 100)
  {
    for($i = $from; $i < $to; $i++) {
      yield $i;
    }
  }

  $obj = simple(1, 5);
  var_dump($obj); // object(Generator)#1 (0) { } 
?>