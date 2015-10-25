<?php ## Вывод всех переменных окружения.
  foreach($_SERVER as $k => $v) 
    echo "<b>$k</b> => <tt>$v</tt><br />\n";
?>
