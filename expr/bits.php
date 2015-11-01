<?php ## Упаковка значений в битовое представление
  // Типы графических примитивов
  define('LINE', 0);      // 000 00
  define('CURVE', 1);     // 000 01
  define('RECTANGLE', 2); // 000 10
  define('ELLIPSE', 3);   // 000 11
  // Цвет
  define('BLACK', 0);     // 000 00
  define('BLUE', 4);      // 001 00
  define('GREEN', 8);     // 010 00
  define('YELLOW', 12);   // 011 00
  define('ORINGE', 16);   // 100 00
  define('RED', 20);      // 101 00
  define('WHITE', 24);    // 110 00

  echo "Желтый прямоугольник в десятичном формате: ";
  echo RECTANGLE | GREEN; // 10
  echo "<br />";
  echo "Желтый прямоугольник в двоичном формате: ";
  echo decbin(RECTANGLE | GREEN); // 1010
  echo "<br />";
?>