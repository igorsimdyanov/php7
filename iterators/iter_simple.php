<?php ## Стандартное поведение foreach.
  class Monolog
  {
    public    $first  = "It's him.";
    protected $second = "The Anomaly.";
    private   $third  = "Do we proceed?";
    protected $fourth = "Yes.";
    private   $fifth  = "He is still...";
    public    $sixth  = "...only human.";
  }
  $monolog = new Monolog();
  foreach ($monolog as $k => $v) {
    echo "$k: $v<br>";
  }
?>