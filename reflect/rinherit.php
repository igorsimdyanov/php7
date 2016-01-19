<?php ## Наследования и модификаторы доступа.
  // Класс с единственным ЗАКРЫТЫМ свойством.
  class Base
  { 
    private $prop = 0; 
    function getBase() { return $this->prop; } 
  }
  // Класс с открытым свойством, имеющим такое же имя, как и в базовом.
  // Это свойство будет полностью обособленным.
  class Derive extends Base
  { 
    public $prop = 1; 
    function getDerive() { return $this->prop; }   
  }

  echo "<pre>";
  $cls = new ReflectionClass('Derive');
  $obj = $cls->newInstance();
  $obj->prop = 2;
  // Распечатываем значения свойств и убеждаемся, что они не пересекаются.
  echo "Base: {$obj->getBase()}, Derive: {$obj->getDerive()}<br />";
  // Распечатываем свойства производного класса.
  var_dump($cls->getProperties());
  // Распечатываем методы производного класса.
  var_dump($cls->getMethods());
?>