<?php ## Использование call_user_func_array().
  // Вывод всех параметров на отдельных строках.
  function myecho(...$str)
  {  
    foreach ($str as $v) {
      echo "$v<br />\n"; // выводим элемент
    }
  }
  // То же самое, но предваряет параметры указанным числом пробелов.
  function tabber($spaces, ...$planets)
  {
    // Подготавливаем аргументы для myecho().
    $new = [];
    foreach ($planets as $planet) {
      $new[] = str_repeat("&nbsp;", $spaces).$planet;
    }
    // Вызываем myecho() с новыми параметрами.
    call_user_func_array("myecho", $new);
  }
  // отображаем строки одну под другой
  tabber(10, "Меркурий", "Венера", "Земля", "Марс");
?>