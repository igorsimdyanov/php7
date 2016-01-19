<?php ## Старый способ задания конструкторов.
  class Test
  {
    function Test($msg) { echo "Вызван конструктор: $msg"; }
  }
  $obj = new Test("hello");
?>