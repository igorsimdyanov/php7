<?php ## Уточнение и совместимость типов.
  require_once "StaticPage.php";
  function echoPage(Page $obj)
  {
    $obj->render();
  }
  $shape = new StaticPage(3);
  echoPage($shape);
?>
