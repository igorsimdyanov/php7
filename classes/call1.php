<?php ## Вызов метода объекта.
  require_once "Math/Complex1.php";
  // Создаем первый объект.
  $a = new MathComplex1;
  $a->re = 314;
  $a->im = 101;
  // Создаем второй объект.
  $b = new MathComplex1;
  $b->re = 303;
  $b->im = 6;
  // Добавляем одно значение к другому.
  $a->add($b);
  // Выводим результат:
  echo $a->__toString();
?>