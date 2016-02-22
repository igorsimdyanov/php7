<?php ## Извлечение ключей из нескольких серверов
  require_once("connect_multi.php");

  $arr = ["first", "second", "third", "fourth", "fifth",
          "sixth", "seventh", "eighth", "ninth", "tenth"];

  // Извлекаем значения с их серверов
  foreach($arr as $key) {
    echo $m->getByKey($key, $key)."<br />";
  }
?>