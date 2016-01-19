<!DOCTYPE html>
<html lang="ru">
<head>
  <title>Вывод параметров командной строки</title>
  <meta charset='utf-8'>
</head>
<body>
<?php
  echo "Данные из командной строки: {$_SERVER['QUERY_STRING']}";
?>
</body>
</html>