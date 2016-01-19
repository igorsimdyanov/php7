<?php ## Эмуляция virtual() в CGI-версии PHP.
  // Функция virtual() не поддерживается?
  if (!function_exists("virtual")) { 
    // Тогда определяем свою.
    echo "virtual";
    function virtual($uri)
    {
      $url = "http://".$_SERVER["HTTP_HOST"].$uri;
      echo file_get_contents($url);
    }
  }
  // Пример - выводит корневую страницу сайта.
  virtual("/");
?>