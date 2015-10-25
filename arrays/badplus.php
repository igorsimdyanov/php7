<?php ## Слияние списков при помощи оператора +.
  $good = ["Julian Arahanga", "Matt Doran", "Belinda McClory"];
  $bad = ["Paul Goddard", "Robert Taylor"];
  $ugly = ["Clint Eastwood"];
  $all = $good + $bad + $ugly;
  print_r($all);
?>
