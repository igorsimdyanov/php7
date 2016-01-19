<?php ## Класс Phar реализует интерфейс ArrayAccess.
try {
  $phar = new Phar('./phpinfo.phar', 0, 'phpinfo.phar');
  // Для записи директив phar.readonly конфигурационного
  // файла php.ini должна быть установлена в 0 или Off
  if (Phar::canWrite()) {
    // Буферизация записи, ничего не записывается, до
    // тех пор, пока не будет вызван метод stopBuffering()
    $phar->startBuffering();
    // Формируем файл phpinfo.php
    $phar['phpinfo.php'] = '<?php phpinfo();';
    // Сохранение результатов на жесткий диск
    $phar->stopBuffering();
  } else {
    echo 'PHAR-архив не может быть бы записан';
  }
} catch (Exception $e) {
  echo 'Невозможно открыть PHAR-архив: ', $e;
}
