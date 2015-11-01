<!DOCTYPE html>
<html lang="ru">
<head>
  <title>Использование htmlspecialchars()</title>
</head>
<body>
  <?php
    $example = <<<EXAMPLE
<?php
  echo "Hello world!";
?>
EXAMPLE;
    echo htmlspecialchars($example);
  ?>
</body>
</html>
