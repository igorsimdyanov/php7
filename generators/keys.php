<?php ## Использование ключей.
  function collect($arr, $callback)
  {
    foreach($arr as $key => $value) {
      yield $key => $callback($value);
    }
  }

  $arr = [
    "first" => 1,
    "second" => 2,
    "third" => 3,
    "fourth" => 4,
    "fifth" => 5,
    "sixth" => 6];
  $collect = collect($arr, function($e){ return $e * $e; });
  foreach($collect as $key => $val) echo "$val ($key) ";
?>