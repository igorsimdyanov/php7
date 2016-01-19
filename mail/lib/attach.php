<?php ## Отправка встроенных изображений.
  function htmlimgmail($mail_to, $thema, $html, $path)
  {
    $EOL = "\n";
    $boundary     = "--".md5(uniqid(time()));
    $headers    = "MIME-Version: 1.0;$EOL";
    $headers .= "From: somebody@somewhere.ru$EOL";
    $headers   .= "Content-Type: multipart/related; ".
                  "boundary=\"$boundary\"$EOL";

    $multipart  = "--{$boundary}$EOL";
    $multipart .= "Content-Type: text/html; charset=koi8-r$EOL";
    $multipart .= "Content-Transfer-Encoding: 8bit$EOL";
    $multipart .= $EOL;
    if($EOL == "\n")  $multipart .= str_replace("\r\n", $EOL, $html);
    $multipart .= $EOL;

    if (!empty($path)) {
      for($i = 0; $i < count($path); $i++) {
        $file = file_get_contents($path[$i]);
        $name = basename($path[$i]);
        $multipart .=  "$EOL--$boundary$EOL";
        $multipart .= "Content-Type: image/jpeg; name=\"$name\"$EOL";
        $multipart .= "Content-Transfer-Encoding: base64$EOL";
        $multipart .= "Content-ID: <".md5($name).">$EOL";
        $multipart .= $EOL;
        $multipart .= chunk_split(base64_encode($file), 76, $EOL);
      }
    }

    $multipart .= "$EOL--$boundary--$EOL";
    if(!is_array($mail_to)) {
      // Письмо отправляется одному адресату
      if(!mail($mail_to, $thema, $multipart, $headers))
        return false;
      else
        return true;
      exit;
    } else {
      // Письмо отправляется на несколько адресов
      foreach($mail_to as $mail) {
        mail($mail, $thema, $multipart, $headers);
      }
    }
  }
?>