<?php ## Использование функции popen().
  // Запускаем процесс (параллельно работе сценария) в режиме чтения. 
  $fp = popen("/usr/sbin/sendmail -t -i", "wb");
  // Передаем процессу тело письма в стандартный входной поток.
  fwrite($fp, "From: our script <script@mail.ru>\n");
  fwrite($fp, "To: someuser@mail.ru\n");
  fwrite($fp, "Subject: here is myself\n");
  fwrite($fp, "\n");
  fwrite($fp, file_get_contents(__FILE__));
  // Не забудем также закрыть канал.
  pclose($fp);
?>