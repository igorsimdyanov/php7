<?php ## Обращение массива.
$names = array(
  "Joel"   => "Silver", 
  "Grant"  => "Hill", 
  "Andrew" => "Mason",
);
$names = array_flip($names);
print_r($names);
// Array([Silver]=>Joel  [Hill]=>Grant  [Mason]=>Andrew)
?>