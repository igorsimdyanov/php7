<?php ## Несовместимость типов при "ручном" наследовании.
  require_once "File/Logger/Debug0.php";
  $logger = new FileLoggerDebug0("test", "test.log");
  // Казалось бы, все верно - все, что может FileLogger,
  // "умеет" и FileLoggerDebug0...
  croak($logger, "Hasta la vista.");
  // Функция принимает параметр типа FileLogger.
  function croak(FileLogger $l, $msg)
  {
    $l->log($msg);
    exit();
  }
?>