<?php ## Вывод содержимого таблицы catalogs
  require_once("connect.php");

  $query = "SELECT * FROM catalogs";
  $cat = $pdo->query($query);

  try {
    while($catalog = $cat->fetch())
      echo $catalog['name']."<br />";
  } catch (PDOException $e) {
    echo "Ошибка выполнения запроса: " . $e->getMessage();
  }
?>