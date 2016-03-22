<?php ## Объявления функций в отдельном файле
  function dump($str)
  {
    echo "<pre>";
    print_r($str);
    echo "</pre>";
  }
  // PRS-1 допускает условное объявление
  if(!function_exists('get_magic_quotes_gpc'))
  {
    function get_magic_quotes_gpc()
    {
      return false;
    }
  }
?>