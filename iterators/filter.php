<?php ## Вывод за исключением PHP-файлов.
  require_once("lib/filter.php");

  $filter = new ExtensionFilter(
                  new DirectoryIterator('.'),
                  'php'
                );

  foreach($filter as $file) {
    echo $file."<br />";
  }
?>