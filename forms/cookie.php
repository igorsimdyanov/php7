<?php ## Демонстрация работы с массивом $_COOKIES.
  // Вначале счетчик равен нулю.
  $count = 0;
  // Если в Cookies что-то есть, берем счетчик оттуда.
  if (isset($_COOKIE['count'])) $count = $_COOKIE['count'];
  $count++;
  // Записываем в Cookies новое значение счетчика.
  setcookie("count", $count, 0x7FFFFFFF, "/");
  // Выводим счетчик.
  echo $count;
?>