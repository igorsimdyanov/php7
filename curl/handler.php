<?php ## POST-обработчик формы.
  if(!empty($_POST)) {
    echo "Имя - ".htmlspecialchars($_POST['name'])." <br />";
    echo "Пароль - ".htmlspecialchars($_POST['pass'])." <br />";
  }
?>