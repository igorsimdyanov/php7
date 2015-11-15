<?php ## Пример неявного использования итератора в foreach.
  require_once "lib/FS.php";

  // Для примера - открываем директорию, в которой много картинок.
  $d = new FS_Directory(".");
  foreach ($d as $path => $entry) {
    if ($entry instanceof FS_File) {
      // Если это - файл, а не поддиректория...
      echo "<tt>$path</tt>: ".$entry->getSize()."<br>";
    }
  }
?>