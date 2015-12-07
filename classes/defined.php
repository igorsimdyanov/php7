<?php ## Проверка существования констант класса.
  require_once("const.php");

  if(defined("cls::NAME")) echo "Константа определена<br />"; // true
  else echo "Константа не определена<br />";

  if(defined("cls::POSITION")) echo "Константа определена<br />"; // false
  else echo "Константа не определена<br />";
?>