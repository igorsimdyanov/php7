<?php ## Не экономное расходование памяти
  function crange($size)
  {
    $arr = [];
    for($i = 0; $i < $size; $i++) {
      $arr[] = $i;
    }
    return $arr;
  }

  $range = crange(1024000);
  foreach($range as $i) echo "$i ";
  // Определяем количество используемой скриптом памяти
  echo memory_get_usage()."<br />";
?>