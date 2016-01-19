<?php ## Квадраты четных элементов.
  function collect($arr, $callback)
  {
    foreach($arr as $value) {
      yield $callback($value);
    }
  }

  function select($arr, $callback)
  {
    foreach($arr as $value) {
      if($callback($value)) yield $value;
    }
  }

  $arr = [1, 2, 3, 4, 5, 6];
  $select = select($arr, function($e){ return $e % 2 == 0 ? true : false; });
  $collect = collect($select, function($e){ return $e * $e; });
  foreach($collect as $val) echo "$val ";
?>