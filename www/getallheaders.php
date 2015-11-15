<?php ## Получение заголовков запроса.
  $headers = getallheaders();
  Header("Content-type: text/plain");
  print_r($headers);
?>