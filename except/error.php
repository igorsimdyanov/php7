<?php ## Ошибка использования оператора [].
  try {
    $str = "Hello world!";
    $str[] = 4;
  } catch (Exception $e) {}
?>