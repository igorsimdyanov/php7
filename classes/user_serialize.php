<?php ## Сериализация объекта класса user
  // Подключаем сериализацию класса
  require_once("user.php");

  // Создаем объект
  $obj = new user("nick", "password");

  // Выводим дамп объекта
  echo "<pre>";
  print_r($obj);
  echo "</pre>";

  // Серилизуем объект
  $object = serialize($obj);

  // Выводим сериализованный объект
  echo $object;
?>