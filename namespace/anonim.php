<?php  ## Использование анонимной функции.
  spl_autoload_register(function($classname) {
    require_once(__DIR__ . "/$classname.php");
  });
  // Использование классов
  $page = new PHP7\Page('О нас', 'Содержимое страницы');
  $page->tags();
?>