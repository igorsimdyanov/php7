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
  $m->getDelayed(array_keys($values));
  while ($result = $m->fetch()) {
    echo $result['value']."<br />";
  }
?>