<?php ## Использование иерархии исключений.
  require_once "exceptions.php";
  try {
    printDocument();
  } catch (IFileException $e) {
    // Перехватываем только файловые исключения.
    echo "Файловая ошибка: {$e->getMessage()}.<br />";
  } catch (Exception $e) {
    // Перехват всех остальных исключений.
    echo "Неизвестное исключение: <pre>", $e, "</pre>";
  }
  function printDocument() {
    $printer = "//./printer";
    // Генерируем исключение типов IFileException и INetException.
    if (!file_exists($printer)) 
      throw new NetPrinterWriteException($printer);
  }
?>