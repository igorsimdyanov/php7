<?php ## Переопределение функции клонирования.
  class Human
  {
    private static $i = 25550690;
    // Идентифиактор объекта.
    public $dna;
    public $text;
    // Конструктор. Присваивает очередной идентификатор.
    public function __construct()
    {
      $this->dna = self::$i++;
      $this->text = "There is no spoon?";
    }
    // При клонировании идентификатор модифицируется.
    public function __clone()
    {
      $this->dna = $this->dna."(cloned)";
    }
  }
  // Создаем новый объект...
  $neo = new Human;
  // ...и его клон.
  $virtual = clone $neo;
  // Убеждаемся в том, что их идентификаторы различаются.
  echo "Neo DNA id: {$neo->dna}, text: {$neo->text}<br />";
  echo "Virtual twin id: {$virtual->dna}, text: {$virtual->text}<br />";
?>