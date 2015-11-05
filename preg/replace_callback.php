<?php ## Функция preg_replace_callback() в действии.
  $str = '<hTmL><bOdY style="background: white;">Hello world!</bOdY></html>';

  $str = preg_replace_callback(
    '{(?<btag></?)(?<content>\w+)(?<etag>.*?>)}s',
    function ($m) { return $m['btag'].strtoupper($m['content']).$m['etag']; },
    $str);

  echo htmlspecialchars($str);
?>
