<?php ## Коварство обратных слэшей.
  $path = "c:\windows\system32\drivers\etc\hosts";
  echo $path."<br />"; // казалось бы, правильно...
  $path = "c:\non\existent\file";
  echo $path."<br />"; // а вот тут - ошибка проявилась!
?>