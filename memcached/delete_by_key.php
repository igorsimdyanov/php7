<?php ## Удаление ключей из нескольких серверов
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
  // Удаляем группы ключей с их сервера
  foreach($keys as $server => $group) {
    $m->deleteMultiByKey($group[0], $group);
  }
?>