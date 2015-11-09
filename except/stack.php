<?php ## Инструкция try во вложенных функциях.
  echo "Начало программы.<br />";
  try { 
    echo "Начало try-блока.<br />";
    outer(); 
    echo "Конец try-блока.<br />";  
  } catch (Exception $e) { 
    echo " Исключение: {$e->getMessage()}<br />";
  } 
  echo "Конец программы.<br />";
  function outer() { 
    echo "Вошли в функцию ".__METHOD__."<br />";
    inner(); 
    echo "Вышли из функции ".__METHOD__."<br />";  
  } 
  function inner() { 
    echo "Вошли в функцию ".__METHOD__."<br />";
    throw new Exception("Hello!");
    echo "Вышли из функции ".__METHOD__."<br />";  
  }
?>