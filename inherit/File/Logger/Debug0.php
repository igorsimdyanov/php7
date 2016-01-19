<?php ## "Ручная" реализация наследования.
  // Вначале подключаем "базовый" класс.
  require_once "File/Logger.php";
  // Класс, добавляющий в FileLogger новую функциональность.
  class FileLoggerDebug0
  {
    // Объект "базового" класса FileLogger.
    private $logger; 
    // Конструктор нового класса. Создает объект FileLogger.
    public function __construct($name, $fname)
    { 
      $this->logger = new FileLogger($name, $fname);
      // Здесь можно проинициализировать другие свойства текущего
      // класса, если они будут.
    }
    // Добавляем новый метод.
    public function debug($s, $level = 0)
    {
      $stack = debug_backtrace();
      $file = basename($stack[$level]['file']);
      $line = $stack[$level]['line'];
      $this->logger->log("[at $file line $line] $s");
    }
    // Оставляем на месте старый метод log().
    public function log($s) { return $this->logger->log($s); }
    // И такие методы-посредники мы должны создать ДЛЯ КАЖДОГО
    // метода из FileLogger.
  }
?>