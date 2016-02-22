<?php ## Использование метода increment()
  require_once("connect.php");

  // Включаем режим бинарного протокола
  $m->setOption(Memcached::OPT_BINARY_PROTOCOL, true);

  echo $m->increment("number", 1, 0);
?>