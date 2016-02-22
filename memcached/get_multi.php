<?php ## Извлечение сразу нескольких значений
  require_once("connect.php");

  $values = [
    "key1" => "value1",
    "key2" => "value2",
    "key3" => "value3"
  ];

  // Установка значений
  $m->setMulti($values);
  // Извлечение значений
  $results = $m->getMulti(array_keys($values));
  echo "<pre>";
  print_r($results);
  echo "</pre>";
?>