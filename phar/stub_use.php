<?php
  require_once('autopager.phar');

  $obj = new ISPager\FilePager(
    new ISPager\PagesList(),
    '../math/largetextfile.txt');
  // Содержимое текущей страницы
  foreach($obj->getItems() as $line) {
    echo htmlspecialchars($line)."<br /> ";
  }
  // Постраничная навигация
  echo "<p>$obj</p>";
