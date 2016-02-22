<?php ## Группировка ключей
  require_once("connect_multi.php");

  $arr = ["first", "second", "third", "fourth", "fifth",
          "sixth", "seventh", "eighth", "ninth", "tenth"];

  // Подготавливаем массив серверов
  $keys = [];
  foreach($m->getServerList() as $server) {
    $keys["{$server['host']}:{$server['port']}"] = [];
  }
  // Распределяем ключи по их серверам
  foreach($arr as $key) {
    $server = $m->getServerByKey($key);
    $keys["{$server['host']}:{$server['port']}"][] = $key;
  }
  echo "<pre>";
  print_r($keys);
  echo "</pre>";
?>