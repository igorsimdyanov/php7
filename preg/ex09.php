<?php ## "Жадные" квантификаторы.
  $str = "Hello, this <b>word</b> is <b>bold</b>!";
  $re = '|<(\w+) [^>]* > (.*) </\1>|xs';
  preg_match($re, $str, $matches) or die("Нет тэгов.");
  echo htmlspecialchars("'$matches[2]' обрамлено тэгом '$matches[1]'");
?>
