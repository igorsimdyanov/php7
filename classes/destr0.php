<?php ## Явное освобождение ресурсов.
  require_once "File/Logger0.php";
  // Создаем в цикле много объектов FileLogger0.
  for ($n = 0; $n < 10; $n++) {
    $logger = new FileLogger0("test$n", "test.log");
    $logger->log("Hello!");
    // Представим, что мы случайно забыли вызвать close().
    // $logger->close();
  }
?>