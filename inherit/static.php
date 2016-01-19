<?php ## static позволяет переопределить метод.
  class Base
  {
    public static function title()
    {
      echo __CLASS__;
    }
    public static function test()
    {
      static::title();
    }
  }

  class Child extends Base
  {
    public static function title()
    {
      echo __CLASS__;
    }
  }

  Child::test(); // Child
?>