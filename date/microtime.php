<?php ## Использование microtime().
  $time = microtime(true);
  printf("С начала эпохи Unix: %f секунд.<br />", $time);
  echo "С начала эпохи Unix: $time секунд.<br />";
?>