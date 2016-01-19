<?php ## Использование класса LimitIterator
  require_once("lib/filter.php");

  $limit =  new LimitIterator(
              new ExtensionFilter(new DirectoryIterator('.'), "php"),
              0, 5);

  foreach($limit as $file) {
    echo $file."<br />";
  }
?>