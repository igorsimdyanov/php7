<?php ## Проверка данных.
  $boolean = "yes";
  if(filter_var($boolean, FILTER_VALIDATE_BOOLEAN))
    echo "$boolean корректное булевое значение<br />";
  else
    echo "$boolean некорректное булевое значение<br />";

  $float = "3.14";
  if(filter_var($float, FILTER_VALIDATE_FLOAT))
    echo "$float корректное значение с плавающей точкой<br />";
  else
    echo "$float некорректное значение с плавающей точкой<br />";

  $url = "http://github.com";
  if(filter_var($url, FILTER_VALIDATE_URL))
    echo "$url корректный адрес<br />";
  else
    echo "$url некорректный адрес<br />";
?>