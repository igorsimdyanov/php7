<?php ## Получение HTTP-заголовков.
  function get_content($hostname)
  {
    // Задаем адрес удаленного сервера
    $curl = curl_init($hostname);

    // Вернуть результат в виде строки
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
    // Включить в результат HTTP-заголовки
    curl_setopt($curl, CURLOPT_HEADER, 1);
    // Исключить тело HTTP-документа
    curl_setopt($curl, CURLOPT_NOBODY, 1);

    // Получаем HTTP-заголовки
    $content = curl_exec($curl);
    // Закрываем CURL соединение
    curl_close($curl);

    // Преобразуем строку $content в массив
    return explode("\r\n", $content);
  }

  $hostname = "http://php.net";
  $out = get_content($hostname);

  echo "<pre>";
  print_r($out);
  echo "</pre>";
?>
