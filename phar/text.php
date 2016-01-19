<?php
  // Формируем PHAR-архив
  $phar = new Phar('text.phar');
  $phar->startBuffering();
  $phar['largetextfile.txt'] = file_get_contents('../math/largetextfile.txt');
  $phar->stopBuffering();

  // Читаем содержимое PHAR-архива
  echo nl2br(file_get_contents('phar://text.phar/largetextfile.txt'));
