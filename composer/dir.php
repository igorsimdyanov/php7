<?php ## Постраничная навигация по папке
  // Временная автозагрузка классов
  spl_autoload_register(function($class){
    require_once("pager/src/{$class}.php");
  });

  $obj = new ISPager\DirPager(
    new ISPager\PagesList(),
    'photos',
    3,
    2);
  // Содержимое текущей страницы
  foreach($obj->getItems() as $img) {
    echo "<img src='$img' /> ";
  }
  // Постраничная навигация
  echo "<p>$obj</p>";
