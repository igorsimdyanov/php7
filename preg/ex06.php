<?php ## Обратные ссылки.
  $str = "Hello, this <b>word</b> is bold!";
  $re = '|<(\w+) [^>]* > (.*?) </\1>|xs';
  preg_match($re, $str, $matches) or die("Нет тэгов.");
  echo htmlspecialchars("'$matches[2]' обрамлено тэгом '$matches[1]'");
?>