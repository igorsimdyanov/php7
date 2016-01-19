<?php ## Проверка вхождения числа в диапазон.
  $first = 100;
  $second = 5;

  $options = [
    'options' => [
      'min_range' => -10,
      'max_range' => 10,
    ]
  ];

  if(filter_var($first, FILTER_VALIDATE_INT, $options))
    echo "$first входит в диапазон -10 .. 10<br />";
  else
    echo "$first не входит в диапазон -10 .. 10<br />";
  
  if(filter_var($second, FILTER_VALIDATE_INT, $options))
    echo "$second входит в диапазон -10 .. 10<br />";
  else
    echo "$second не входит в диапазон -10 .. 10<br />";
?>