<?php ## filter_var() не заменяет intval().
  $number = "3.14";
  echo filter_var($number, FILTER_SANITIZE_NUMBER_INT)."<br />"; // 314
  echo intval($number);                                          // 3
?>