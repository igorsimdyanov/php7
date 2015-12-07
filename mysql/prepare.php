<?php ## Параметризованный запрос
  require_once("connect.php");

  try {
    $query = "SELECT * 
              FROM catalogs
              WHERE catalog_id = :catalog_id";
    $cat = $pdo->prepare($query);
    $cat->execute(['catalog_id' => 1]);
    echo $cat->fetch()['name']; // Процессоры
  } catch (PDOException $e) {
    echo "Ошибка выполнения запроса: " . $e->getMessage();
  }
?>