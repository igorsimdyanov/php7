<?php ## Использование генератора без foreach
  function simple($from = 0, $to = 100)
  {
    for($i = $from; $i < $to; $i++) {
      yield $i;
    }
  }

  $obj = simple(1, 5);
  // Выполняем цикл, пока итератор не достигнет конца
  while($obj->valid()) {
    echo ($obj->current() * $obj->current())." ";
    // К следующему элементу
    $obj->next();
  }
?>