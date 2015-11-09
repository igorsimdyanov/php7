<?php ## Использование конструктора.
  require_once "lib/config.php"; 
  require_once "Math/Complex2.php";
  $a = new MathComplex2(314, 101);
  $a->add(new MathComplex2(303, 6));
  echo $a;
  $a = new MathComplex2;
?>