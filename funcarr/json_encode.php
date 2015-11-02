<?php ## Использование функции json_encode()
  $arr = [
    "employee" => "Иван Иванов",
    "phones" => [
      "916 153 2854",
      "916 643 8420"
    ]
  ];
  echo json_encode($arr, JSON_UNESCAPED_UNICODE );
?>