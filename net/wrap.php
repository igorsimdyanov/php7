<?php ## Пример работы с потоками.
  echo "<h1>Первая страница (HTTP):</h1>";
  echo file_get_contents("http://php.net");
  echo "<h1>Вторая страница (FTP):</h1>";
  echo file_get_contents("ftp://ftp.aha.ru/");
?>