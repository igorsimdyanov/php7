<?php ## Создание генератора
  function simple($from = 0, $to = 100) {
    for($i = $from; $i < $to; $i++) {
      yield $i;
    }
  }

  foreach(simple(1, 5) as $val)
    echo ($val * $val)." "; // 1 4 9 16 
?>