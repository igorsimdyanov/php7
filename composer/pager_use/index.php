<?php ## Использование компонента ISPager.
  require_once(__DIR__ . '/vendor/autoload.php');

  $obj = new ISPager\FilePager(
    new ISPager\ItemsRange(),
    '../../math/largetextfile.txt');
  // Содержимое текущей страницы
  foreach($obj->getItems() as $line) {
    echo htmlspecialchars($line)."<br /> ";
  }
  // Постраничная навигация
  echo "<p>$obj</p>";
