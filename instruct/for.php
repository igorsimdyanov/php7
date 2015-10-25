<?php ## Демонстрация цикла for
  for ($i = 0, $j = 0, $k = "Points"; $i < 100; $j++, $i += $j) $k = $k.".";
  echo $k; // Points..............
?>