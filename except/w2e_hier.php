<?php ## Иерархия ошибок.
  require_once "PHP/Exceptionizer.php";
  suffer();
  function suffer()
  {
    $w2e = new PHP_Exceptionizer(E_ALL);
    try {
      // Генерируем ошибку.
      trigger_error("Damn it!", E_USER_ERROR);
    } catch (AboveE_USER_WARNING $e) {
      // Перехват ошибок: E_USER_WARNING и более серьезных.
      echo "<pre><b>Перехвачена ошибка!</b>\n", $e, "</pre>";
    }
  }
?>