<?php ## Постраничная навигация по файлу
  // Временная автозагрузка классов
  spl_autoload_register(function($class){
    require_once("pager/src/{$class}.php");
  });

  $obj = new ISPager\FilePager(
    new ISPager\PagesList(),
    '../math/largetextfile.txt');
  // Содержимое текущей страницы
  foreach($obj->getItems() as $line) {
    echo htmlspecialchars($line)."<br /> ";
  }
  // Постраничная навигация
  echo "<p>$obj</p>";
