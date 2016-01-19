<?php
/**
 * Абстрактный класс страницы
 *
 * @author D. Koterov <dmitry.koterov@gmail.com>
 * @author I. Simdyanov <igorsimdyanov@gmail.com>
 *
 * @license http://opensource.org/licenses/gpl-license.php GNU Public License
 *
 * @package    Page
 * @subpackage PHP7\Page
 */
namespace PHP7;

/**
 * @abstract
 */
abstract class Page {
  /**
   * Любая страница имеет заголовок
   *
   * @var String
   */
  protected $title;
  /**
   * Любая страница имеет содержимое
   *
   * @var String
   */
  protected $content;

  /**
   * Конструктор класса
   *
   * @param  String $title заголовок страницы
   * @param  String $content содержимое страницы
   * @return void
   */
  public function __construct($title = '', $content = '') {
    $this->title = $title;
    $this->content = $content;
  }

  /**
   * Получение заголовка страницы
   *
   * @return String
   */
  public function title() {
    return $this->title;
  }

  /**
   * Получение содержимого страницы
   *
   * @return String
   */
  public function content() {
    return $this->content;
  }
  

  /**
   * Формирование HTML-представления страницы
   *
   * @return void
   */
  public function render() {
    echo "<h1>".htmlspecialchars($this->title())."</h1>";
    echo "</p>".nl2br(htmlspecialchars($this->content()))."</p>";
  }
}