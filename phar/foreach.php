<?php ## Перебор свойств при помощи метода foreach.
try {
  $dir = opendir('phar://ispager.phar/ISPager');
  while(($file = readdir($dir)) !== false) {
    echo "{$file}<br />";
  }
  closedir($dir);
} catch (Exception $e) {
  echo 'Невозможно открыть PHAR-архив: ', $e;
}
