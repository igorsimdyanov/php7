<?php ## Внутренний редирект (только в CGI-версии PHP!)
  // Вначале форсируем внутренний редирект.
  header("Status: 200 OK");
  // Получаем URI-директорию текущего скрипта.
  $dir = dirname($_SERVER['SCRIPT_NAME']);
  if ($dir == '\\') $dir = '';
  // Осуществляем переадресацию по абсолютному (!) URI.  
  header("Location: $dir/result.php");
  exit();