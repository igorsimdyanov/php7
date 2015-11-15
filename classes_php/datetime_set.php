<?php ## Явная установка даты.
  $date = new DateTime("2016-01-01 00:00:00");
  echo $date->format("d-m-Y H:i:s"); // 01-01-2016 00:00:00
?>