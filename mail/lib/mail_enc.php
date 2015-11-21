<?php ## Отправка почты по шаблону (наилучший способ).
  // Подключаем функции.
  include_once "lib/mailx.php";
  include_once "lib/mailenc.php";
  $text = "Well, now, ain't this a surprise?";
  $tos = ["Пупкин Василий <poupkinne@mail.ru>, Иванов <b@mail.ru>"];
  $tpl = file_get_contents("mail.eml");
  foreach ($tos as $to) {
    $mail = $tpl;
    $mail = strtr($mail, [
      "{TO}"   => $to,
      "{TEXT}" => $text,
    ]);
    $mail = mailenc($mail);
    mailx($mail);
  }
?>