<?php ## Использование FILTER_NULL_ON_FAILURE.
  $true = "yes";
  $false = "no";
  $null = "Hello world!";
  echo "<pre>";
  var_dump(filter_var($true, FILTER_VALIDATE_BOOLEAN, FILTER_NULL_ON_FAILURE));
  var_dump(filter_var($false, FILTER_VALIDATE_BOOLEAN, FILTER_NULL_ON_FAILURE));
  var_dump(filter_var($null, FILTER_VALIDATE_BOOLEAN, FILTER_NULL_ON_FAILURE));
  echo "</pre>";
?>