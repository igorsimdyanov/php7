<?php ## Создание анонимных функций.
  $mul = create_function('$a,$b', 'return $a * $b;');
  $neg = create_function('$a', 'return -$a;');
  echo $mul(10, 20) . "<br />";  // выводит 200
  echo $neg(2) . "<br />";       // выводит -2
?>