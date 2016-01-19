<?php ## Перехват всех исключений.
  // Пользовательское исключение.
  class HeadshotException extends Exception {}
  // Функция, генерирующая исключение.
  function eatThis() { throw new HeadshotException("bang-bang!"); }
  // Функция с кодом-финализатором.
  function action()
  {
    echo "Все, что имеет начало, ";
    try {
      // Внимание, опасный момент!
      eatThis();
    } catch (Exception $e) {
      // Ловим ЛЮБОЕ исключение, выводим текст...
      echo "имеет и конец.<br />";
      // ...а потом передаем это исключение дальше.
      throw $e;
    }
  }
  try {
    // Вызываем функцию.
    action();
  } catch (HeadshotException $e) {
    echo "Извините, вы застрелились: {$e->getMessage()}";
  }
?>