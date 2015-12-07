<?php ## Увеличение картинки со сглаживанием.
  $tile = imageCreateFromJpeg("sample1.jpg"); 
  $im   = imageCreateTrueColor(800, 600); 
  imageFill($im, 0, 0, imageColorAllocate($im, 0, 255, 0));
  imageSetTile($im, $tile);
  // Создаем массив точек со случайными координатами.
  $p = [];
  for ($i = 0; $i < 4; $i++) {
    array_push($p, mt_rand(0, imageSX($im)), mt_rand(0, imageSY($im)));
  }
  // Рисуем закрашенный многоугольник.
  imageFilledPolygon($im, $p, count($p) / 2, IMG_COLOR_TILED); 
  // Выводим результат.
  header("Content-type: image/jpeg");
  // Выводим картинку с максимальным качеством (100).
  imageJpeg($im, '', 100);
  // Можно было сжать с помощью PNG.
  #header("Content-type: image/png");
  #imagePng($im);
?>
