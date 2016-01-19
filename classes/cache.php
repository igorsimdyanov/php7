<?php ## Локальное кэширование ресурса по идентификатору.
  class FileLogger
  {
    // Массив всех созданных объектов-журналов.
    static public $loggers = [];
    // Время создания объекта.
    private $time;
    // Закрытый конструктор: создание объектов извне запрещено!
    private function __construct($fname)
    {
      // Запоминаем время создания этого объекта.
      $this->time = microtime(true);
    }
    // Открытый метод, предназначенный для создания объектов класса.
    // Создать новый объект можно только с его помощью!
    public static function create($fname)
    {
      // Вначале проверяем: возможно, объект для указанного имени
      // файла уже существует? Тогда его и возвращаем.
      if (isset(self::$loggers[$fname])) 
        return self::$loggers[$fname];
      // А иначе создаем полностью новый объект и сохраняем ссылку 
      // на него в статическом массиве.
      return self::$loggers[$fname]=new self($fname);
    }
    // Возвращает время создания объекта.
    public function getTime() { return $this->time; }
    // Дальше могут идти остальные методы класса.
  }
  // Пример использования класса.
  #$logger = new FileLogger("a"); // Нельзя! Доступ закрыт!
  $logger1 = FileLogger::create("file.log"); // ОК!
  sleep(1); // как будто бы программа немного поработала
  $logger2 = FileLogger::create("file.log"); // ОК!
  // Выводим времена создания обоих объектов.
  echo "{$logger1->getTime()}, {$logger2->getTime()} ";
?>