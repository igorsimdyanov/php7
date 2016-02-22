<?php ## Установка значений методом setByKey()
  require_once("connect_multi.php");

  $arr = ["first", "second", "third", "fourth", "fifth",
          "sixth", "seventh", "eighth", "ninth", "tenth"];
  // Размещаем значение на одном из двух сереверов
  foreach($arr as $value) {
    if($m->setByKey($value, $value, $value)) {
      echo "Успешно размещено на сервере $value<br />";
    }
  }
?>