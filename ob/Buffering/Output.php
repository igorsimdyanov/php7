<?php
namespace Buffering;

/**
 * Автоматизация вызова ob_end_clean().
 *
 * Упрощает перехват выходного потока в скриптах.
 * Гарантировано вызывает ob_end_clean() при выходе объекта
 * класса за текущую область видимости.
 */
class Output
{
  /**
   * Содержимое буферов разных уровней.
   *
   * @var array
   */
  private static $buffers = [];
  /**
   * Уровень вложенности текущего объекта.
   *
   * @var int
   */
  private $level;
  /**
   * Буфер уже был уничтожен (например, выведен в браузер).
   *
   * @var boolean
   */
  private $flushed;
  /**
   * Запускает новый буфер перехвата выходного потока.
   *
   * @param  resource $handler
   */
  public function __construct($handler = null)
  {
    // Вначале запоминаем предыдущее содержимое буфера.
    $prevLevel = ob_get_level();
    self::$buffers[$prevLevel] = ob_get_contents();
    // Устанавливаем новый буфер для перехвата.
    if ($handler !== null) ob_start($handler); else ob_start();
    // Запоминаем текущий уровень объекта.
    $this->level = ob_get_level();
  }
  /**
   * Завершает перехват выходного потока.
   */
  public function __destruct()
  {
    if ($this->flushed) return;
    ob_end_clean();
    unset(self::$buffers[$this->level]);
  }
  /**
   * Отправить буфер в браузер.
   */
  public function flush()
  {
    if ($this->flushed) return;
    ob_end_flush();
    unset(self::$buffers[$this->level]);
  }
  /**
   * Возвращает данные в буфере.
   *
   * @return string
   */
  public function __toString()
  {
    if ($this->flushed) false;  
    // Если текущий объект не является активным, то возвращается 
    // текст из внутреннего хранилища, а иначе - результат работы 
    // ob_get_contents(). 
    if (ob_get_level() == $this->level)
      return ob_get_contents();
    else 
      return self::$buffers[$this->level];
  }
}
