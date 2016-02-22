<?php ## Добавление значения в memcached
  require_once("connect.php");

  if($m->add("key", "value")){
    echo "Значение успешно установлено: ". $m->get("key");
  }
?>