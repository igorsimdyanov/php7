<?php ## Проверка класса FileLoggerDebug0.
  require_once "lib/config.php"; 
  require_once "File/Logger/Debug0.php";
  $logger = new FileLoggerDebug0("test", "test.log");
  $logger->log("Обычное сообщение");
  $logger->debug("Отладочное сообщение");
?>