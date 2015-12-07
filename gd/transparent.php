<?php ## Создание изображений с областями прозрачности.
$im = imageCreate(620, 241);
$t = imageColorAllocate($im, 0, 0, 0);
$c = imageColorAllocate($im, 0, 255, 0);
imageFill($im, 0, 0, $c);
imageFilledRectangle($im, 180, 20, 420, 220, $t);
imageColorTransparent($im, $t);
Header("Content-type: image/png");
imagePng($im);
?>