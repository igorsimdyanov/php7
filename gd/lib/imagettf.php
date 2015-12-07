<?php ## Библиотека функций для работы с TTF.
  // Исправленная функция imageTtfBBox(). Работает корректно
  // даже при ненулевом угле поворота $angle (исходная функция
  // при этом работает неверно).
  function imageTtfBBox_fixed($size, $angle, $fontfile, $text) {
    // Вычисляем размер при НУЛЕВОМ угле поворота.
    $horiz = imageTtfBBox($size, 0, $fontfile, $text);
    // Вычисляим синус и косинус угла поворота.
    $cos = cos(deg2rad($angle));
    $sin = sin(deg2rad($angle));
    $box = [];
    // Выполняем поворот каждой координаты.
    for ($i = 0; $i < 7; $i += 2) {
      list ($x, $y) = [$horiz[$i], $horiz[$i + 1]];
      $box[$i]   = round($x * $cos + $y * $sin);
      $box[$i+1] = round($y * $cos - $x * $sin);
    }
    return $box;
  } 

  // Вычисляет размеры прямоугольника с горизонтальными и вертикальными
  // сторонами, в который вписан указанный текст. Результирующий массив 
  // имеет структуру:
  // array(
  //   0  => ширина прямоугольника,
  //   1  => высота прямоугольника,
  //   2  => смещение начальной точки по X относительно левого верхнего
  //         угла прямоугольника,
  //   3  => смещение начальной точки по Y
  // )
  function imageTtfSize($size, $angle, $fontfile, $text) {
    // Вычисляем охкатывающий многоугольник.
    $box = imageTtfBBox_fixed($size, $angle, $fontfile, $text);
    $x = [$box[0], $box[2], $box[4], $box[6]];
    $y = [$box[1], $box[3], $box[5], $box[7]];
    // Вычисляем ширину, высоту и смещение начальной точки.
    $width  = max($x) - min($x);
    $height = max($y) - min($y);
    return array($width, $height, 0 - min($x), 0 - min($y));
  }

  // Функция возвращает наибольший размер шрифта, учитывая, что
  // текст $text обязательно должен поместиться в прямоугольник
  // размерами ($width, $height).
  function imageTtfGetMaxSize($angle, $fontfile, $text, $width, $height) {
    $min = 1;
    $max = $height;
    while (true) {
      // Рабочий размер - среднее между максимумом и минимумом.
      $size = round(($max + $min) / 2);
      $sz = imageTtfSize($size, $angle, $fontfile, $text);
      if ($sz[0] > $width || $sz[1] > $height) {
        // Будем уменьшать максимальную ширину до те пор, пока текст не 
        // "перехлестнет" многоугольник.
        $max = $size;
      } else {
        // Наоборот, будем увеличивать минимальную, пока текст помещается. 
        $min = $size;
      }
      // Минимум и максимум сошлись друг к другу.
      if (abs($max - $min) < 2) break;
    }
    return $min;
  }
?>