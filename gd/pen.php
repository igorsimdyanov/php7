<?php ## Изменение пера.
  // Создаем новое изображение.
  $im  = imageCreate(100, 100);
  $w   = imageColorAllocate($im, 255, 255, 255);
  $c1  = imageColorAllocate($im, 0, 0, 255);
  $c2  = imageColorAllocate($im, 0, 255, 0);
  // Очищаем фон.
  imageFilledRectangle($im, 0, 0, imageSX($im), imageSY($im), $w);
  // Устанавливаем стиль пера.
  $style = array($c2, $c2, $c2, $c2, $c2, $c2, $c2, $c1, $c1, $c1, $c1);
  imageSetStyle($im, $style);
  // Устанавливаем толщину пера.
  imageSetThickness($im, 2);
  // Рисуем линию.
  imageLine($im, 0, 0, 100, 100, IMG_COLOR_STYLED);
  // Выводим изображение в браузер.
  header("Content-type: image/png");
  imagePng($im);
?> 