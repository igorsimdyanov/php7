<?php ## Прием POST-данных из формы
  $name = [];
  if(isset($_POST['first_name'])) $name[] = $_POST['first_name'];
  if(isset($_POST['last_name'])) $name[] = $_POST['last_name'];
  if(count($name) > 0) echo "Здравствуйте, ".implode(" ", $name)."!";
?>