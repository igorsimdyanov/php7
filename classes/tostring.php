<?php ## Перегрузка интерполяции.
  require_once "Math/Complex1.php";
  $a = new MathComplex1;
  $a->re = 314;
  $a->im = 101;
  echo "Значение: $a";
?>
