<?php
  // Если переданы POST-данные, вместо отображения
  // HTML-кода подготовливаем ответ
  if(isset($_POST['json'])) {
    // Преобразуем JSON-данные в массив
    $arr = json_decode($_POST['json'], true);
    // Объединяем содержимое в строку
    $name = trim(implode(" ", $arr));

    $result = "Здравствуйте";
    if(!empty($name))
      $result .= ", " . htmlspecialchars($name);
    $result .= "!";

    // Отдаем результат
    echo $result;
    exit();
  }
?>