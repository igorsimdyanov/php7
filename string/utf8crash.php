<!DOCTYPE html>
<html lang="ru">
<head>
  <title>Проблемы с обработкой UTF-8 в PHP</title>
</head>
<body>
<?php
  $str = "Hello world";
  echo "{$str[2]}<br />";
  $str = "Привет мир!";
  echo "{$str[2]}<br />";
?>
</body>
</html>