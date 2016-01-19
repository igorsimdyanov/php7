<?php ## Более удобная отправка почты.
  // Функция отправляет письмо, полностью заданное в параметре $mail.
  // Корректно обрабатываются заголовки To и Subject.
  function mailx($mail)
  {
    // Разделяем тело сообщения и заголовки.
    list ($head, $body) = preg_split("/\r?\n\r?\n/s", $mail, 2);
    // Выделяем заголовок To.
    $to = "";
    if (preg_match('/^To:\s*([^\r\n]*)[\r\n]*/m', $head, $p)) {
      $to = @$p[1]; // сохраняем
      $head = str_replace($p[0], "", $head); // удаляем из исходной строки
    }
    // Выделяем Subject.
    $subject = "";  
    if (preg_match('/^Subject:\s*([^\r\n]*)[\r\n]*/m', $head, $p)) {
      $subject = @$p[1];
      $head = str_replace($p[0], "", $head);
    }
    // Отправляем почту
    mail($to, $subject, $body, trim($head));
  }
?>