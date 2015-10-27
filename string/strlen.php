<?php ## Подсчет количества символов в строке
  $str = "Привет, мир!";
  echo "В строке &quot;$str&quot; ".strlen($str)." байт<br />"; // 21
  echo "В строке &quot;$str&quot; ".mb_strlen($str)." символов<br />"; // 12
?>
