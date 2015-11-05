<?php ## Замена по шаблону.
  $text = htmlspecialchars(file_get_contents(__FILE__));
  $html = preg_replace('/(\$[a-z]\w*)/is', '<b>$1</b>', $text);
  echo "<pre>$html</pre>";
?>