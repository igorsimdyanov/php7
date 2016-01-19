<?php ## Использование yield from.
  function square($value)
  {
    yield $value * $value;
  }

  function even_square($arr)
  {
    foreach($arr as $value) {
      if($value % 2 == 0) yield from square($value);
    }
  }

  $arr = [1, 2, 3, 4, 5, 6];
  foreach(even_square($arr) as $val) echo "$val ";
?>