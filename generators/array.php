<?php ## Использование массивов.
  function generator()
  {
    yield 1;
    yield from two_three();
  }

  function two_three()
  {
    yield 2;
    yield 3;
  }

  foreach(generator() as $i) echo "$i ";
?>