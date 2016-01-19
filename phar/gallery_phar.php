<?php ## Хранение бинарных файлов.
try {
  $phar = new Phar('./gallery.phar', 0, 'gallery.phar');
  // Для записи директив phar.readonly конфигурационного
  // файла php.ini должна быть установлена в 0 или Off
  if (Phar::canWrite()) {
    // Буферизация записи, ничего не записывается, до
    // тех пор, пока не будет вызван метод stopBuffering()
    $phar->startBuffering();
    // Добавление всех файлов из папки photos
    foreach(glob('../composer/photos/*') as $jpg) {
      $phar[basename($jpg)] = file_get_contents($jpg);
    }
    // Назначаем файл-заглушку
    $phar['show.php'] = file_get_contents('show.php');
    $phar->setDefaultStub('show.php', 'show.php');
    // Сохранение результатов на жесткий диск
    $phar->stopBuffering();
  } else {
    echo 'PHAR-архив не может быть бы записан';
  }
} catch (Exception $e) {
  echo 'Невозможно открыть PHAR-архив: ', $e;
}
