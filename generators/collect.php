<?php ## Обработка каждого элемента массива.
  function collect($arr, $callback)
  {
    foreach($arr as $value) {
      yield $callback($value);
    }
  }

  $arr = [1, 2, 3, 4, 5, 6];
  $collect = collect($arr, function($e){ return $e * $e; });
  foreach($collect as $val) echo "$val ";
?>