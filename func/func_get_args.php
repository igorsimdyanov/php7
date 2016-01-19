<?php ## Использование func_get_args().
  function myecho()
  {  
    foreach (func_get_args() as $v) {
      echo "$v<br />\n"; // выводим элемент
    }
  }
  // отображаем строки одну под другой
  myecho("Меркурий", "Венера", "Земля", "Марс");
?>