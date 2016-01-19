<?php ## Извлекаем только четные элементы.
  function reject($arr, $callback)
  {
    foreach($arr as $value) {
      if(!$callback($value)) yield $value;
    }
  }

  $arr = [1, 2, 3, 4, 5, 6];
  $reject = reject($arr, function($e){ return $e % 2 == 0 ? true : false; });
  foreach($reject as $val) echo "$val ";
?>