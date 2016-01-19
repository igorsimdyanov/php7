<?php ## Проверка регулярным выражением.

  $first = "chapter01";
  $second = "ch02";

  // Соответствие строкам вида "ch01", "ch15"
  $options = [
    'options' => [
      'regexp' => "/^ch\d+$/"
    ]
  ];

  if(filter_var($first, FILTER_VALIDATE_REGEXP, $options))
    echo "$first корректный идентификатор главы<br />";
  else
    echo "$first некорректный идентификатор главы<br />";

  if(filter_var($second, FILTER_VALIDATE_REGEXP, $options))
    echo "$second корректный идентификатор главы<br />";
  else
    echo "$second некорректный идентификатор главы<br />";
?>