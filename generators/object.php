<?php ## Каждый генератор - это объект
  function simple($from = 0, $to = 100)
  {
    for($i = $from; $i < $to; $i++) {
      echo "значение = $i<br />";
      yield $i;
    }
  }
  $generator = simple();
  echo gettype($hello); // object
?>