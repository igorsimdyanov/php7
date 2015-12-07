<?php ## Использование метода fetchAll
  require_once("connect.php");

  try {
    $query = "SELECT * FROM catalogs";
    $cat = $pdo->query($query);
  
    $catalogs = $cat->fetchAll();
    foreach($catalogs as $catalog)
      echo $catalog['name']."<br />";
  } catch (PDOException $e) {
    echo "Ошибка выполнения запроса: " . $e->getMessage();
  }
?>