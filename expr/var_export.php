<?php ## Использование var_export(). 
  class SomeClass
  {
    private $x = 100;
  }
  $a = array(1, array ("Programs hacking programs. Why?", "д'Артеньян"));
  echo "<pre>"; var_export($a); echo "</pre>";
  $obj = new SomeClass();
  echo "<pre>"; var_export($obj); echo "</pre>";
?>