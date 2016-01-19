<?php ## Вывод сведений об исключении.
  function test($n)
  {
    $e = new Exception("bang-bang #$n!");
    echo "<pre>", $e, "</pre>";
  }
  function outer() { test(101); }
  outer();
?>