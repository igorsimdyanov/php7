<?php ## Использование констант класса DateTime.
  $date = new DateTime("2016-01-01 00:00:00");
  echo $date->format(DateTime::RSS); // Fri, 01 Jan 2016 00:00:00 +0000
?>