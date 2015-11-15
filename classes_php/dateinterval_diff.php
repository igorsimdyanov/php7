<?php ## Использование метода diff()
  $date = new DateTime('2015-01-01 0:0:0');
  $nowdate = new DateTime();
  $interval = $nowdate->diff($date);
  // Выводим результаты
  echo $date->format("d-m-Y H:i:s")."<br />";
  echo $nowdate->format("d-m-Y H:i:s")."<br />";
  // Выводим разницу
  echo $interval->format("%Y-%m-%d %H:%S")."<br />";
  // Выводим дамп интервала
  echo "<pre>";
  print_r($interval);
  echo "</pre>";
?>