<?php ## Автоопределение MIME-типа изображения.
  // Выбираем случайное изображение любого формата.
  $fnames = glob("*.{gif,jpg,png}", GLOB_BRACE);
  $fname = $fnames[mt_rand(0, count($fnames)-1)];
  // Определяем формат.
  $size = getimagesize($fname);
  // Выводим изображение.
  header("Content-type: {$size['mime']}");
  echo file_get_contents($fname);
?>