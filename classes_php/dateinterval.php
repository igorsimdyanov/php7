<?php ## Создание интервала DateInterval при помощи конструктора.
  $nowdate = new DateTime();
  $date = $nowdate->sub(new DateInterval("P3Y1M14DT12H19M2S"));
  echo $date->format("Y-m-d H:i:s");
?>