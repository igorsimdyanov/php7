<?php ## Использование CURL.
  // Задаем адрес удаленного сервера
  $curl = curl_init("http://php.net");
  // Получаем содержимое страницы
  echo curl_exec($curl);
  // Закрываем CURL-соединение
  curl_close($curl);
?>
