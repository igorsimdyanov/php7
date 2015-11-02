<?php ## Вывод дат.
  echo date("l dS of F Y h:i:s A<br />");
  echo date("Сегодня d.m.Y<br />");
  echo date("Этот файл датирован d.m.Y<br />", filectime(__FILE__));
?>
