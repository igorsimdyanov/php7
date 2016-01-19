<?php ## Альтернативный способ чтения содержимого каталога.
  // Открываем каталог
  $cat = dir(".");
  // Читаем содержимое каталога
  while(($file = readdir($cat->handle)) !== false) {
    echo $file."<br />";
  }
  // Закрываем каталог
  closedir($cat->handle);
?>
