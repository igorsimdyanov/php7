<?php ## Формирование пунктов второго выпадающего списка
  // Устанавливаем соединение с базой данных
  require_once("connect.php");

  $query = "SELECT * 
            FROM catalogs
            WHERE
              parent_id = :id AND
              is_active = 1
            ORDER BY pos";
  $cat = $pdo->prepare($query);
  $cat->execute(['id' => $_GET['id']]);
  echo "<option value='0'>Выберите подраздел</option>";
  while($catalog = $cat->fetch()) {
    echo "<option value='{$catalog['id']}'>{$catalog['name']}</option>";
  }
