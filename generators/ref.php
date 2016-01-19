<?php ## Возврат значения по ссылке
  function &reference()
  {
    $value = 3;
    while ($value > 0) {
      yield $value;
    }
  }

  foreach (reference() as &$number) {
    echo (--$number).' ';
  }
?>