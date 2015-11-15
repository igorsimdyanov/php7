<?php ## Создание объекта неизвестного класса.
  require_once "lib/Complex2.php";
  // Пусть имя класса хранится в переменной $className.
  $className = "MathComplex2";
  // Создаем новый объект.
  $obj = new $className(6, 1);
  echo "Созданный объект: $obj";
?>