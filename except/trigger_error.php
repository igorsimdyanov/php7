<?php ## Использование функции trigger_error().
  function print_age($age)
  {
    $age = intval($age);
    if ($age < 0)
    {
      trigger_error("Функция print_age(): ".
                    "возраст не может быть".
                    " отрицательным", E_USER_ERROR);
    }
    echo "Возраст составляет: $age";
  }

  // Вызов функции с отрицательным аргументом
  print_age(-10);
?>