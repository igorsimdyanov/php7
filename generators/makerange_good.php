<?php ## Экономное расходование памяти
  function crange($size)
  {
    for($i = 0; $i < $size; $i++) {
      yield $i;
    }
  }

  $range = crange(1024000);
  foreach($range as $i) echo "$i ";
  // Определяем количество используемой скриптом памяти
  echo memory_get_usage()."<br />";
?>