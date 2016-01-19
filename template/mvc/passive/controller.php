<?php ## MVC. Контроллер системы с пассивным Шаблоном.
  require_once "HTML/Template/IT.php";
  require_once "../model.php";
  // Инициализируем систему шаблонов.
  $tpl = new HTML_Template_IT(".");
  $tpl->loadTemplatefile("view.htm", true, true);
  // Загружаем данные гостевой книги.
  $book = loadBook("gbook.dat");
  // В цикле генерируем HTML-код книги.
  foreach ($book as $id => $e) {
    $tpl->setCurrentBlock("book_element") ;
    $tpl->setVariable("NAME", $e['name']);
    $tpl->setVariable("TEXT", nl2br($e['text']));
    $tpl->parseCurrentBlock();
  }
  // Выводим результат.
  $tpl->show();
