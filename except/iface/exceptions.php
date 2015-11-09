<?php ## Классы-исключения.
  require_once "interfaces.php";
  // Ошибка: файл не найден.
  class FileNotFoundException extends Exception 
    implements IFileException {}
  // Ошибка: ошибка доступа к сокету.
  class SocketException extends Exception 
    implements INetException {}
  // Ошибка: неправильный пароль пользователя.  
  class WrongPassException extends Exception 
    implements IUserException {}
  // Ошибка: невозможно записать данные на сетевой принтер.
  class NetPrinterWriteException extends Exception 
    implements IFileException, INetException {}
  // Ошибка: невозможно соединиться с SQL-сервером.
  class SqlConnectException extends Exception
    implements IInternalException, IUserException {}
?>
