<?php ## Деструктор.
  // Класс, упрощающий ведение разного рода журналов.
  class FileLogger
  {
    public $f;          // открытый файл
    public $name;       // имя журнала
    public $lines = []; // накапливаемые строки
    public $t;
    // Создает новый файл журнала или открывает дозапись в конец
    // существующего. Параметр $name - логическое имя журнала.
    public function __construct($name, $fname)
    { 
      $this->name = $name;
      $this->f = fopen($fname, "a+"); 
      $this->log("### __construct() called!");
    }
    // Гарантировано вызывается при уничтожении объекта.
    // Закрывает файл журнала.
    public function __destruct()
    {
      $this->log("### __destruct() called!");
      // Вначале выводим все накопленные данные.
      fputs($this->f, join("", $this->lines));
      // Затем закрываем файл.
      fclose($this->f); 
    }
    // Добавляет в журнал одну строку. Она не попадает в файл сразу
    // же, а записывается в буфер и остается там до вызова __destruct().
    public function log($str)
    { 
      // Каждая строка предваряется текущей датой и именем журнала.
      $prefix = "[".date("Y-m-d_h:i:s ")."{$this->name}] ";
      $str = preg_replace('/^/m', $prefix, rtrim($str));
      // Сохраняем строку.
      $this->lines[] = $str."\n";
    }
  }
?>