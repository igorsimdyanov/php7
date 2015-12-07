<?php ## Извлечение строки со случайным номером.
  echo random_bytes(20);
  $ourFile = fopen("largetextfile.txt", "r");
  // Прочитываем каждую строку файла.
  for ($i = 0; $s = fgets($ourFile, 10000); $i++) {
    if (mt_rand(0, $i) == 0) $line = $s;
  }
  echo $line;
?>