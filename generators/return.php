<?php ## Использование return в генераторе.
  function generator()
  {
    yield 1;
    return yield from two_three();
    yield 5;
  }

  function two_three()
  {
    yield 2;
    yield 3;
    return 4;
  }

  $generator = generator();

  foreach($generator as $i) {
    echo "$i<br />";
  }
  echo "return = ".$generator->getReturn();
?>