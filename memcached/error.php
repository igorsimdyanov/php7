<?php ## Обработка ошибок выполнения запросов
  require_once("connect.php");

  if(!$m->add("key", "value")) echo $m->getResultMessage()."<br />";
  if(!$m->add("key", "value")) echo $m->getResultMessage()."<br />"; // NOT STORED
?>