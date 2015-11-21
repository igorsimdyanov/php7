<?php ## Серилизация объекта класса user
  // Подключаем реализацию класса
  require_once("user.php");

  // Создаем объект
  $obj = new user("nick", "password");

  // Выводим дамп объекта
  echo "<pre>";
  print_r($obj);
  echo "</pre>";

  // Серилизуем объект
  $object = serialize($obj);

  // Выводим серилизованный объект
  echo $object;
?>