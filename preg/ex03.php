<?php ## Преобразования e-mail в HTML-ссылку.
  $text = "Привет от somebody@mail.ru, а также от other@mail.ru!";
  $html = preg_replace(
    '/(\S+)@([a-z0-9.]+)/is',     // найти все E-mail
    '<a href="mailto:$0">$0</a>', // заменить их по шаблону
    $text                         // искать в $text
  );
  echo $html;
?>
