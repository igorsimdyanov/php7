<?php ## Очистка целого числа.
  $number = "4342hello";
  echo filter_var($number, FILTER_SANITIZE_NUMBER_INT)."<br />"; // 4342
  echo intval($number)."<br />";                                 // 4342
?>