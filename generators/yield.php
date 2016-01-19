<?php ## Исследуем yield.
  function generator()
  {
    echo "перед первым yield<br />";
    yield 1;
    echo "перед вторым yield<br />";
    yield 2;
    echo "перед третьим yield<br />";
    yield 3;
    echo "после третьего yield<br />";
  }

  foreach(generator() as $i) {
    echo "$i<br />";
  }
?>