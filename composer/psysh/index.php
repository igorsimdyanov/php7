<?php ## Интерактивный отладчик.
  require_once(__DIR__ . '/vendor/autoload.php');

  $log = new Monolog\Logger('name');
  $handler = new Monolog\Handler\StreamHandler('app.log', Monolog\Logger::WARNING);
  $log->pushHandler($handler);

  # Вызываем интерактивный отладчик
  eval(\Psy\sh());

  $log->addWarning('Предупреждение');
?>