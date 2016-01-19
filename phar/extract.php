<?php ## Извлечение содержимого PHAR-архива.
try {
    $phar = new Phar('autopager.phar');
    $phar->extractTo('extract');
} catch (Exception $e) {
  echo 'Невозможно открыть PHAR-архив: ', $e;
}
