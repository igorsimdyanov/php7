<?php ## Восстановление объекта
  // Подключаем реализацию класса
  require_once("user.php");

  // Серилизованный объект
  $object = 'O:4:"user":3:{s:4:"name";s:4:"nick";'.
            's:8:"referrer";s:19:"/user_serialize.php";'.
            's:4:"time";i:1448125787;}';

  // Восстанавливаем объект
  $obj = unserialize($object);

  // Выводим дамп объекта
  echo "<pre>";
  print_r($obj);
  echo "</pre>";
?>
