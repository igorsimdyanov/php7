<?php ## Множественная замена в строке.
  $from = ["{TITLE}", "{BODY}"];
  $to   = [
    "Философия", 
    "Представляется логичным, что сомнение представляет онтологический смысл жизни. Отношение к современности поразительно."
  ];
  $template =<<<MARKER
<!DOCTYPE html>
<html lang='ru'>
<head>
  <title>{TITLE}</title>
  <meta charset='utf-8'>
</head>
<body>{BODY}</body>
</html>
MARKER;
  echo str_replace($from, $to, $template);
?>
