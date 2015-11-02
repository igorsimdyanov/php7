<?php ## Пример взаимной блокировки.
  header("Content-type: text/plain");
  // Информация о стандартных потоках.
  $spec = [
     0 => ["pipe", "r"],  // stdin
     1 => ["pipe", "w"],  // stdout
     2 => ["file", "/tmp/error-output.txt", "a"] // stderr
  ];
  // Запускаем процесс.
  $proc = proc_open("cat", $spec, $pipes);
  // Дальше можно писать в $pipes[0] и читать из $pipes[1].
  for ($i = 0; $i < 100; $i++) 
    fwrite($pipes[0], "Hello World #$i!\n");
  fclose($pipes[0]);
  while (!feof($pipes[1])) echo fgets($pipes[1], 1024);
  fclose($pipes[1]);
  // Закрываем дескриптор.
  proc_close($proc);
?>