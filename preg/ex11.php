<?php ## Многострочность.
  $str = file_get_contents(__FILE__);
  $str = preg_replace('/^/m', "\t", $str);
  echo "<pre>".htmlspecialchars($str)."</pre>";
?>