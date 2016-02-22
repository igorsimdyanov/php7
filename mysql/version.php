<?php ## Извлечение текущей версии
  require_once('connect_db.php');

  // Выполняем запрос
  $query = "SELECT VERSION() AS version";
  $ver = $pdo->query($query);
  // Извлекаем результат
  $version = $ver->fetch();
  echo $version['version']; // 5.5.46-0ubuntu0.14.04.2
?>