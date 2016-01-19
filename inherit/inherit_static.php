<?php ## self не позволяет переопределить метод.
  class Base
  {
    public static function title()
    {
      echo __CLASS__;
    }
    public static function test()
    {
      self::title();
    }
  }

  class Child extends Base
  {
    public static function title()
    {
      echo __CLASS__;
    }
  }

  Child::test(); // Base
?>