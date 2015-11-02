<?php ## Использование функции glob().
  echo "<pre>";
  print_r(glob("c:/windows/*/*.{exe,ini}", GLOB_BRACE));
?>
