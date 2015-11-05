<?php ## Игнорирование карманов.
  $str = "2015-12-15";
  $re = '|^(?:\d{4})-(?:\d{2})-(\d{2})$|';
  preg_match($re, $str, $matches) or die("Соответствие не найдено");
  echo htmlspecialchars("День: ".$matches[1]);
?>