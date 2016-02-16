<?php ## Удаление HTML-тегов из строки.
  $st =<<<HTML
    <b>Жирный текст</b>
    <tt>Моноширинный текст</tt>
    <a href='http://www.dklab.ru'>Ссылка</a>
    a<x && y>d
HTML;
  echo "Исходный текст: $st";
  echo "<hr>После удаления тэгов: ".strip_tags($st, "<tt><b>");
?>