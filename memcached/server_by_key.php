<?php ## Какие сервера выбраны для каждого ключа?
  require_once("connect_multi.php");

  $arr = ["first", "second", "third", "fourth", "fifth",
          "sixth", "seventh", "eighth", "ninth", "tenth"];
  // Определяем местоположение ключа
  foreach($arr as $key) {
    $server = $m->getServerByKey($key);
    echo "$key => {$server['host']}:{$server['port']}<br />";
  }
?>