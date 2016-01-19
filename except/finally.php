<?php ## Инструкция try во вложенных функциях.
  function eatThis() { throw new Exception("bang-bang!"); }
  function hello()
  {
    echo "Все, что имеет начало, ";
    try {
      eatThis();
    } finally {
      echo "имеет и конец.";
    }
    echo "Это никогда не будет напечатано!";
  }
  // Вызываем функцию.
  hello();
?>