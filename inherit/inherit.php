<?php ## Проверка класса File_Logger_Debug0.
  require_once "File/Logger/Debug.php";
  $logger = new FileLoggerDebug("test.log");
  $logger->log("Обычное сообщение");
  $logger->debug("Отладочное сообщение");
?>