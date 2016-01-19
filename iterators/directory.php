<?php ## Использование класса DirectoryIterator.
  $dir = new DirectoryIterator('.');
  foreach($dir as $file) {
    echo $file."<br />";
  }
?>
