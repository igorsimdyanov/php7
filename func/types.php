<?php ## Типы аргументов и возвращаемого значения
  function sum(int $fst, int $snd) : int
  {
    return $fst + $snd;
  }
  echo sum(2, 2);
  echo sum(2.5, 2.5); // Fatal Error в PHP < 7, Exception TypeError в PHP >=7
?>