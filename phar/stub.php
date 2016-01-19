<?php ## Создание PHAR-архива с заглушкой.
try {
  $phar = new Phar('./autopager.phar', 0, 'autopager.phar');
  // Для записи директив phar.readonly конфигурационного
  // файла php.ini должна быть установлена в 0 или Off
  if (Phar::canWrite()) {
    // Буферизация записи, ничего не записывается, до
    // тех пор, пока не будет вызван метод stopBuffering()
    $phar->startBuffering();
    // Добавление всех файлов из компонента ISPager
    $phar->buildFromIterator(
      new DirectoryIterator(realpath('../composer/pager/src/ISPager')),
      '../composer/pager/src');
    // Добавляем автозагрузчик в архив
    $phar->addFromString('autoloader.php', file_get_contents('autoloader.php'));
    // Назначаем автозагрузчик в качестве файла-заглушки
    $phar->setDefaultStub('autoloader.php', 'autoloader.php');
    // Сохранение результатов на жесткий диск
    $phar->stopBuffering();
  } else {
    echo 'PHAR-архив не может быть бы записан';
  }
} catch (Exception $e) {
  echo 'Невозможно открыть PHAR-архив: ', $e;
}
