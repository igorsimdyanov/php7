<?php ## Использование методов класса DirectoryIterator.
  $dir = new DirectoryIterator('.');
  foreach($dir as $file) {
    // Выводим только файлы
    if ($file->isFile()) {
      // Имя файла и его размер
      echo $file." ".$file->getSize()."<br />";
    }
  }
?>