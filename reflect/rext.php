<?php ## Использование отражения библиотеки.
  $consts = [];
  foreach (get_loaded_extensions() as $name) {
    $ext = new ReflectionExtension($name);
    $consts = array_merge($consts, $ext->getConstants());
  }
  echo "<pre>".var_export($consts, true)."</pre>";
?>