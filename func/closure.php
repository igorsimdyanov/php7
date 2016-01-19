<?php ## Замыкание
  $message = "Работа не может быть продолжена из-за ошибок:<br />";
  $check = function(array $errors) use ($message)
  {
    if (isset($errors) && count($errors) > 0) {
      echo $message;
      foreach($errors as $error) {
        echo "$error<br />";
      }
    }
  };

  $check([]);
  // ...
  $erorrs[] = "Заполните имя пользователя";
  $check($erorrs);
  // ...
  $message = "Список требований"; // Уже не изменить
  $erorrs = ["PHP", "MySQL", "memcache"];
  $check($erorrs);
?>