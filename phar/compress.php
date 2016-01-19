<?php ## Сжатие архива.
try {
  $phar = new Phar('compress.phar', 0, 'compress.phar');
  if (Phar::canWrite() && Phar::canCompress()) {
    $phar->startBuffering();

    foreach(glob('../composer/photos/*') as $jpg) {
      $phar[basename($jpg)] = file_get_contents($jpg);
    }
    // Назначаем файл-заглушку
    $phar['show.php'] = file_get_contents('show.php');
    $phar->setDefaultStub('show.php', 'show.php');
    // Сжимаем файл
    $phar->compress(Phar::GZ);

    $phar->stopBuffering();
  } else {
    echo 'PHAR-архив не может быть бы записан';
  }
} catch (Exception $e) {
  echo 'Невозможно открыть PHAR-архив: ', $e;
}
