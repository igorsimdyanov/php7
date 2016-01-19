<?php ## Перехват обращений к членам класса.
  class Hooker
  {
    // Обычное свойство класса.
    public  $opened = 'opened';
    // Обычный метод класса.
    public function method() { echo "Whoa, deja vu.<br />"; }
    // В этом массиве будут храниться все "виртуальные" свойства.
    private $vars   = array();  
    // Перехват получения значения свойства.
    public function __get($name)
    {
      echo "Перехват: получаем значение $name.<br />";
      // Возвращаем null, если "виртуальное" свойство еще не определено.
      return isset($this->vars[$name])? $this->vars[$name] : null;
    }
    // Перехват установки значения свойства.
    public function __set($name, $value)
    {
      echo "Перехват: устанавливаем значение $name равным '$value'.<br />";
      //Перед записью значения удаляем пробелы.
      return $this->vars[$name] = trim($value);
    }
    // Перехват вызова несуществующего метода.
    public function __call($name, $args)
    {
      echo "Перехват: вызываем $name с аргументами: ";
      var_dump($args);
      return $args[0];
    }
  }
  // Иллюстрация работы класса.
  $obj = new Hooker();
  echo "<b>Получаем значение обычного свойства.</b><br />";
  echo "Значение: {$obj->opened}<br />";
  echo "<b>Вызываем обычный метод.</b><br />";
  $obj->method();
  echo "<b>Присваивание несуществующему свойству.</b><br />";
  $obj->nonExistent = 101;
  echo "<b>Получение значения несуществующего свойства.</b><br />";
  echo "Значение: {$obj->nonExistent}<br />";
  echo "<b>Обращение к несуществующему методу.</b><br />";
  $obj->nonExistent(6);
?>
