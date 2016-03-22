<?php ## AJAX-обработчик состояния флажка
  // Инициируем сессию
  session_start();
  // Изменяем состояние
  if($_POST['status'] == "true") {
    $_SESSION[$_POST['id']] = 1;
  } else {
    $_SESSION[$_POST['id']] = 0;
  }
