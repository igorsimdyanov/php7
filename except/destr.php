<?php ## Деструкторы и исключения.
  // Класс, комментирующий операции со своим объектом.
  class Orator
  {
    private $name;
    function __construct($name)
    {
      $this->name = $name;
      echo "Создан объект {$this->name}.<br />";
    }
    function __destruct()
    {
      echo "Уничтожен объект {$this->name}.<br />";
    }
  }
  function outer()
  { 
    $obj = new Orator(__METHOD__);
    inner(); 
  } 
  function inner()
  { 
    $obj = new Orator(__METHOD__);
    echo "Внимание, вбрасывание!<br />";
    throw new Exception("Hello!");
  }
  // Основная программа.
  echo "Начало программы.<br />";
  try { 
    echo "Начало try-блока.<br />";
    outer(); 
    echo "Конец try-блока.<br />";  
  } catch (Exception $e) { 
    echo " Исключение: {$e->getMessage()}<br />";
  } 
  echo "Конец программы.<br />";
?>