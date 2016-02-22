<?php ## Соединение с базой данных
  try {
    $pdo = new PDO('mysql:host=localhost;dbname=test', 'root', '');
  }
  catch (PDOException $e) {
    echo "Невозможно установить соединение с базой данных";
  }
?>