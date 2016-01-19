<?php ## Финальные методы.
  class Base
  {
    public final function test() {}
  }
  class Derive extends Base
  {
    public function test() {} // Ошибка! Нельзя переопределить!
  }
?>