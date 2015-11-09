<?php ## Отключение ошибок: логи не модифицируются.
  error_reporting(E_ALL);
  ini_set("error_log", "log.txt");
  ini_set("log_errors", true);
  @filemtime("spoon");
?>