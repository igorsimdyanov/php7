<?php ## Ошибочный запрос
  //require_once("connect_db.php");
  require_once("connect.php");

  try {
    $query = "SELECT VERSION1() AS version";
    $ver = $pdo->query($query);
    echo $ver->fetch()['version'];
  } catch (PDOException $e) {
    echo "Ошибка выполнения запроса: " . $e->getMessage();
  }
?>