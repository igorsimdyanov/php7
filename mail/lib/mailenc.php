<?php ## Кодирование заголовков письма.
  // Корректно кодирует все заголовки в письме $mail с использованием 
  // метода base64. Кодировка письма определяется автоматически на основе
  // заголовка Content-type. Возвращает полученное письмо.
  function mailenc($mail)
  {
    // Разделяем тело сообщения и заголовки.
    list ($head, $body) = preg_split("/\r?\n\r?\n/s", $mail, 2);
    // Определяем кодировку письма по заголовку Content-type.
    $encoding = '';
    $re = '/^Content-type:\s*\S+\s*;\s*charset\s*=\s*(\S+)/mi';
    if (preg_match($re, $head, $p)) $encoding = $p[1];
    // Проходимся по всем строкам-заголовкам.
    $newhead = "";
    foreach (preg_split('/\r?\n/s', $head) as $line) {
      // Кодируем очередной заголовок.
      $line = mailenc_header($line, $encoding);
      $newhead .= "$line\r\n";
    }
    // Формируем окончательный результат.
    return "$newhead\r\n$body";
  }

  // Кодирует в строке максимально возможную последовательность
  // символов, начинающуюся с недопустимого символа и НЕ 
  // включающую E-mail (адреса E-mail обрамляют символами < и >).
  // Если в строке нет ни одного недопустимого символа, преобразование
  // не производится.
  function mailenc_header($header, $encoding = 'UTF-8')
  {
    return preg_replace_callback(
      '/([\x7F-\xFF][^<>\r\n]*)/s',
      function ($p) use($encoding) {
        // Пробелы в конце оставляем незакодированными.
        preg_match('/^(.*?)(\s*)$/s', $p[1], $sp);
        return "=?$encoding?B?".base64_encode($sp[1])."?=".$sp[2];
      },
      $header
    );
  }
?>
