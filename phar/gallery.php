<?php ## Использование foreach для доступа к содержимому архива.
try {
  $phar = new Phar('./gallery.phar', 0, 'gallery.phar');
  foreach($phar as $file) {
    // Извлекаем MIME-тип изображения
    $finfo = finfo_open(FILEINFO_MIME_TYPE);
    $mime = finfo_file($finfo, $file);
    finfo_close($finfo);

    if($mime == 'image/jpeg') {
      echo "<img src='/gallery_use.php?image={$file}' /><br />";
    }
  }
} catch (Exception $e) {
  echo 'Невозможно открыть PHAR-архив: ', $e;
}
