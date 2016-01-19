<?php ## MVC. Модель (ядро) гостевой книги.
  // Загружает гостевую книгу с диска. Возвращает содержание книги.
  function loadBook($fname) {
    if (!file_exists($fname)) return [];
    $Book = unserialize(file_get_contents($fname)); 
    return $Book;
  }
  // Сохраняет содержимое книги на диске.
  function saveBook($fname, $book) {
    file_put_contents($fname, serialize($book));
  }