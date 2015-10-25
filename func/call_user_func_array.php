<?php ## Использование call_user_func_array().
// Вывод всех параметров на отдельных строках.
function myecho() {  
  for ($i=0; $i<func_num_args(); $i++) {
    echo func_get_arg($i)."<br>\n"; // выводим элемент
  }
}
// То же самое, но предваряет параметры указанным числом пробелов.
function tabber($spaces) {
  $args = func_get_args();
  array_shift($args); // удаляем первый элемент из массива
  // Подготавливаем аргументы для myecho().
  $new = array();
  foreach ($args as $st) {
    $new[] = str_repeat("&nbsp;", $spaces).$st;
  }
  // Вызываем myecho() с новыми параметрами.
  call_user_func_array("myecho", $new);
}
// отображаем строки одну под другой
tabber(10, "Меркурий", "Венера", "Земля", "Марс");
?>
