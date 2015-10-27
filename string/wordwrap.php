<?php ## Использование wordwrap().
  function cite($ourText, $maxlen = 60, $prefix = "> ") {  
     $st = wordwrap($ourText, $maxlen - strlen($prefix), "\n");
     $st = $prefix.str_replace("\n", "\n$prefix", $st);
     return $st;
  }
  echo "<pre>"; 
  echo cite("The first Matrix I designed was quite naturally 
perfect, it was a work of art - flawless, sublime. A triumph 
equalled only by its monumental failure. The inevitability 
of its doom is apparent to me now as a consequence of the 
imperfection inherent in every human being. Thus, I 
redesigned it based on your history to more accurately reflect 
the varying grotesqueries of your nature. However, I was again 
frustrated by failure.", 20);
  echo "</pre>";
?>