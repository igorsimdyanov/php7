<?php  ## Использование функции __autoload().
  // Функция автозагрузки классов
  function __autoload($classname)
  {
    require_once(__DIR__ . "/$classname.php");
  }
  // Использование классов
  $page = new PHP7\Page('О нас', 'Содержимое страницы');
  $page->tags();
?>