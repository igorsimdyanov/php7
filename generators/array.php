<?php ## Использование массивов.
  function generator()
  {
    yield 1;
    yield from [2, 3];
  }

  foreach(generator() as $i) echo "$i ";
?>