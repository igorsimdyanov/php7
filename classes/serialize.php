<?php ## Серилизация объекта $obj класса cls
  // Подключаем определение класса cls
  require_once("cls.php");

  // Создаем объект
  $obj = new cls(100);

  // Серилизуем объект
  $text = serialize($obj);

  // Сохраняем объект в файл
  $fd = fopen("text.obj", "w");
  if(!$fd) exit("Невозможно открыть файл");
  fwrite($fd, $text);
  fclose($fd);
?>