<?php ## "Активизация" адесов E-mail.
  $text = "Адреса: user-first@mail.ru, second.user@mail.ru.";
  $html = preg_replace(
    '{
      [\w-.]+             # имя ящика
      @
      [\w-]+(\.[\w-]+)*   # имя хоста
    }xs',
    '<a href="mailto:$0">$0</a>',
    $text
  );
  echo $html;
?>