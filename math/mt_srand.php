<?php ## Последовательности случайных чисел.
  mt_srand(123);
  for ($i = 0; $i < 5; $i++) echo mt_rand()." ";
  echo "<br />";
  mt_srand(123);
  for ($i = 0; $i < 5; $i++) echo mt_rand()." ";
?>