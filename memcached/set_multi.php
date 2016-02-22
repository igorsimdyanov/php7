<?php ## Установка сразу нескольких значений
  require_once("connect.php");

  $values = [
    "key1" => "value1",
    "key2" => "value2",
    "key3" => "value3"
  ];

  // Установка значений
  $m->setMulti($values);
  // Извлечение значений
  foreach(array_keys($values) as $key)
    echo $m->get($key)."<br />"
?>