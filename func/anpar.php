<?php ## Передача анонимной функции в качестве параметра.
  function tabber($spaces, $echo, ...$planets)
  {
    // Подготавливаем аргументы для myecho().
    $new = [];
    foreach ($planets as $planet) {
      $new[] = str_repeat("&nbsp;", $spaces).$planet;
    }
    // Пользовательский вывод задается из вне
    $echo(...$new);
  }

  // Массив для вывода
  $planets = ["Меркурий", "Венера", "Земля", "Марс"];
  // отображаем строки одну под другой
  tabber(10, function(...$str) {
    foreach ($str as $v) {
      echo "$v<br />\n";
    }
  }, ...$planets);
?>