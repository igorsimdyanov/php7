<?php ## Использование функции filter_var_array().

  // Проверяемые значения
  $data = [
    'number' => 5,
    'first'  => 'chapter01',
    'second' => 'ch02',
    'id'     => 2
  ];
  // Фильтры
  $definition = [
    'number' => [
      'filter'  => FILTER_VALIDATE_INT,
      'options' => ['min_range' => -10, 'max_range' => 10]
    ],
    'first' => [
      'filter'  => FILTER_VALIDATE_REGEXP,
      'options' => ['regexp' => '/^ch\d+$/']
    ],
    'second' => [
      'filter'  => FILTER_VALIDATE_REGEXP,
      'options' => ['regexp' => '/^ch\d+$/']
    ],
    'id' => FILTER_VALIDATE_INT
  ];
  // Осуществляем проверку
  $result = filter_var_array($data, $definition);
  echo "<pre>";
  print_r($result);
  echo "<pre>";
?>