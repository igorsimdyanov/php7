<?php ## Перебор списка.
  $dossier = [
    ["name" => "Thomas Anderson", "born" => "1962-03-11"],
    ["name" => "Keanu Reeves",    "born" => "1962-09-02"],
  ];
  for($i = 0; $i < count($dossier); $i++)
    echo "{$dossier[$i]['name']} was born {$dossier[$i]['born']}<br />";
?>