<?php
/**
 * ISPager - постраничная навигация
 *
 * @license http://opensource.org/licenses/gpl-license.php GNU Public License
 *
 * @package    ISPager
 * @subpackage ISPager\Pager
 */

namespace ISPager;

/**
 * Абстрактный класс постраничной навигации
 *
 * @author D. Koterov <dmitry.koterov@gmail.com>
 * @author I. Simdyanov <igorsimdyanov@gmail.com>
 *
 * @abstract
 */
abstract class Pager
{
    /**
     * @var View объект, формирующий представление постраничной навигации
     */
    protected $view;
    /**
     * @var String дополнительные параметры, которые необходимо передавать по ссылкам
     */
    protected $parameters;
    /**
     * @var String название GET-параметра, через который передается номер текущей страницы
     */
    protected $counter_param;
    /**
     * @var String количество видимых ссылок слева и справа от текущей страницы
     */
    protected $links_count;
    /**
     * @var Interger количество элементов на странице
     */
    protected $items_per_page;

    /**
     * Конструктор
     *
     * @param View $view объект класса, осуществляющий вывод постраничной навигации
     * @param Integer $items_per_page количество позиций на одной странице
     * @param Integer $links_count количество видимых ссылок слева и справа от текущей страницы
     * @param String $get_params дополнительные параметры, которые необходимо передавать по ссылкам
     * @param String $counter_param название GET-параметра, через который передается номер текущей страницы
     */
    public function __construct(
        View $view,
        $items_per_page = 10,
        $links_count = 3,
        $get_params = null,
        $counter_param = 'page')
    {
        $this->view           = $view;
        $this->parameters     = $get_params;
        $this->counter_param  = $counter_param;
        $this->items_per_page = $items_per_page;
        $this->links_count    = $links_count;
    }

    /**
     * Возвращает общее количество элементов в разбиваемой на страницы коллекции
     *
     * @abstract
     * @return integer
     */
    abstract public function getItemsCount();
    /**
     * Возвращает массив с элементами текущей страницы
     *
     * @abstract
     * @return Array
     */
    abstract public function getItems();

    /**
     * Количество видимых ссылок слева и справа от текущей страницы
     *
     * @return Integer
     */
    public function getVisibleLinkCount()
    {
        return $this->links_count;
    }
    /**
     * Возвращает дополнительные GET-параметры, которые необходимо передавать по ссылкам
     *
     * @return String
     */
    public function getParameters()
    {
        return $this->parameters;
    }
    /**
     * Название GET-параметра, через который передается номер текущей страницы
     *
     * @return String
     */
    public function getCounterParam()
    {
        return $this->counter_param;
    }
    /**
     * Возвращает количество элементов на одной странице
     *
     * @return Integer
     */
    public function getItemsPerPage()
    {
        return $this->items_per_page;
    }
    /**
     * Путь к текущей странице
     *
     * @return String
     */
    public function getCurrentPagePath()
    {
        return $_SERVER['PHP_SELF'];
    }
    /**
     * Номер текущей страницы
     *
     * @return String
     */
    public function getCurrentPage()
    {
        if(isset($_GET[$this->getCounterParam()])) {
            return intval($_GET[$this->getCounterParam()]);
        } else {
            return 1;
        }
    }
    /**
     * Возвращает общее количество страниц
     *
     * @return integer
     */
    public function getPagesCount()
    {
      // Количество позиций
      $total = $this->getItemsCount();
      // Вычисляем количество страниц
      $result = (int)($total / $this->getItemsPerPage());
      if((float)($total / $this->getItemsPerPage()) - $result != 0) $result++;

      return $result;
    }
    /**
     * Возвращает строку с постраничной навигацией
     *
     * @return String
     */
    public function render()
    {
        return $this->view->render($this);
    }
    /**
     * Интерполяция объекта в строку
     *
     * @return String
     */
    public function __toString()
    {
        return $this->render();
    }
}
