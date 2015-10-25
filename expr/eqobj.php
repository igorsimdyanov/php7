<?php ## Сравнение объектов.
  class AgentSmith {}
  $smit = new AgentSmith();
  $wesson = new AgentSmith();
  if ($smit == $wesson)  echo "Объекты равны.";
  if ($smit === $wesson) echo "Объекты эквивалентны.";
?>
