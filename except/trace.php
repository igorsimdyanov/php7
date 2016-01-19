<?php ## Вывод дерева вызовов функции.
  function inner($a)
  {
    // Внутренняя функция.
    echo "<pre>"; print_r(debug_backtrace()); echo "</pre>";
  }
  function outer($x)
  {
    // Родительская функция.
    inner($x * $x);
  }
  // Главная программа.
  outer(3);
?>