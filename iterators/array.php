<?php ## Использование виртуальных массивов.
  /*
   * Класс представляет собой массив, ключи которого нечувствительны
   * к регистру символов. Например, ключи "key", "kEy" и "KEY" с точки
   * зрения данного класса выглядят идентичными (в отличие от стандартных
   * массивов PHP, в которых они различаются).
   */
  class InsensitiveArray implements ArrayAccess
  {
    // Здесь будем хранить массив элементов в нижнем регистре.
    private $a = [];
    // Возвращает true, если элемент $offset существует.
    public function offsetExists($offset)
    { 
      $offset = strtolower($offset);  // переводим в нижний регистр
      $this->log("offsetExists('$offset')");
      return isset($this->a[$offset]);
    }
    // Возвращает элемент по его ключу.
    public function offsetGet($offset)
    { 
      $offset = strtolower($offset);
      $this->log("offsetGet('$offset')");
      return $this->a[$offset]; 
    }
    // Устанавливает новое значение элемента по его ключу.
    public function offsetSet($offset, $data)
    { 
      $offset = strtolower($offset);
      $this->log("offsetSet('$offset', '$data')");
      $this->a[$offset] = $data;
    }
    // Удаляет элемент с указанным ключом.
    public function offsetUnset($offset)
    { 
      $offset = strtolower($offset);
      $this->log("offsetUnset('$offset')");
      unset($this->array[$offset]); 
    }
    // Служебная функция для демонстрации возможностей.
    public function log($str)
    {
      echo "$str<br>";
    }
  }
  // Проверка.
  $a = new InsensitiveArray();
  $a->log("## Устанавливаем значения (оператор =).");
  $a['php'] = 'There is more than one way to do it.';
  $a['php'] = 'Это значение должно переписаться поверх предыдущего.';
  $a->log("## Получаем значение элемента (оператор []).");
  $a->log("<b>значение:</b> '{$a['php']}'");
  $a->log("## Проверяем существование элемента (оператор isset()).");
  $a->log("<b>exists:</b> ".(isset($a['php'])? "true" : "false"));
  $a->log("## Уничтожаем элемент (оператор unset()).");
  unset($a['php']);
?>