<?php ## Переустановка значений методом set()
  require_once("connect.php");

  if(!$m->set("key", "value1")) echo $m->getResultMessage()."<br />";
  if(!$m->set("key", "value2")) echo $m->getResultMessage()."<br />";
  echo $m->get("key"); // value2
?>