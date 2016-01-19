<?php ## Перехват выходного потока скрипта.
  // Устанавливаем перехват в буфер 1.
  ob_start();
    // Следующий текст попадет в 1-й буфер.
    echo "From delusion lead me to truth.<br />\n";  
    // Откладываем на время буфер 1 и активизируем второй.
    ob_start();
      // Текст попадет в буфер 2.
      echo "From death lead me to immortality.<br />\n";
      // Получаем текст во втором буфере.
      $second = ob_get_contents(); 
    // Отключает (без вывода в браузер) буфер 2 и активизируем первый.
    ob_end_clean();     
    // Попадет опять в буфер 1.
    echo "From darkness lead me to light.<br />\n";  
    // Получаем текст в первом буфере.
    $first = ob_get_contents(); 
  // Т.к. это последний буфер, буферизация отключается.
  ob_end_clean(); 
  // Обрабатываем буферы для более "красивого" вывода.
  $first  = preg_replace('/^/m', '&nbsp;&nbsp;', trim($first));
  $second = preg_replace('/^/m', '&nbsp;&nbsp;', trim($second));
  // Распечатываем значения буферов, которые мы сохранили в массиве.
  echo "<i>Содержимое первого буфера:</i><br />$first";
  echo "<i>Содержимое второго буфера:</i><br />$second";