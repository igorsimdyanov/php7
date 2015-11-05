<?php ## Сравнение "жадных" и "ленивых" квантификаторов.
  $str = '[b]жирный текст [b]а тут - еще жирнее[/b] вернулись[/b]';
  $to  = '<b>$1</b>';
  $re1 = '|\[b\] (.*)  \[/b\]|ixs';
  $re2 = '|\[b\] (.*?) \[/b\]|ixs';
  $result = preg_replace($re1, $to, $str);
  echo "Жадная версия: ".htmlspecialchars($result)."<br />";
  $result = preg_replace($re2, $to, $str);
  echo "Ленивая версия: ".htmlspecialchars($result)."<br />";
?>