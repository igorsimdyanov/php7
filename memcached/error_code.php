<?php ## Использование метода getResultCode()
  require_once("connect.php");

  if (!($key = $m->get('key'))) {
    if ($m->getResultCode() == Memcached::RES_NOTFOUND) {
      $key = 'value';
      $m->add('key', $key);
    }
  }
  echo $key;
?>