<?php ## Использование класса с деструктором.
  require_once "File/Logger.php";
  for ($n = 0; $n < 10; $n++) {
    $logger = new FileLogger("test$n", "test.log");
    $logger->log("Hello!");
    // Теперь нет необходимости заботиться о корректном 
    // уничтожении объекта - PHP делает все сам!
  }
  exit();
?>