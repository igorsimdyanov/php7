<?php ## Соединение с memcached
  $m = new Memcached();
  $m->addServer('localhost', 11211);
?>