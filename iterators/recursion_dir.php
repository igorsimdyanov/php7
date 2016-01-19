<?php ## Рекурсивная функция для вывода содержимого каталога
  function recursion_dir($path)
  {
    static $depth = 0;

    $dir = opendir($path);
    while(($file = readdir($dir)) !== false) {
      if ($file == '.' || $file == '..' ) continue;
      echo str_repeat("-", $depth)." $file<br />";

      if (is_dir("$path/$file")) {
        $depth++;
        recursion_dir("$path/$file");
        $depth--;
      }
    }
    closedir($dir);
  }

  recursion_dir('.');
?>
