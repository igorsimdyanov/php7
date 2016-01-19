<?php
/**
 * ISPager - постраничная навигация
 *
 * @license http://opensource.org/licenses/gpl-license.php GNU Public License
 *
 * @package    ISPager
 * @subpackage ISPager\DirPager
 */

namespace ISPager;

/**
 * Постраничная навигация для содержимого базы данных
 *
 * @author D. Koterov <dmitry.koterov@gmail.com>
 * @author I. Simdyanov <igorsimdyanov@gmail.com>
 */
class PdoPager extends Pager
{
    /**
     * @var PDO объект доступа к базе данных
     */
    protected $pdo;
    /**
     * @var Название таблицы
     */
    protected $tablename;
    /**
     * @var WHERE-условие SQL-запроса
     */
    protected $where;
    /**
     * @var Параметры WHERE-условия
     */
    protected $params;
    /**
     * @var Сортировка выборки
     */
    protected $order;
    /**
     * Конструктор
     *
     * @param View $view объект класса, осуществляющий вывод постраничной навигации
     * @param PDO $pdo объект доступа к базе данных
     * @param String $tablename название таблицы
     * @param String $where условие
     * @param Array $params массив параметров
     * @param String $order сортировка
     * @param Integer $items_per_page количество позиций на одной странице
     * @param Integer $links_count количество видимых ссылок слева и справа от текущей страницы
     * @param String $get_params дополнительные параметры, которые необходимо передавать по ссылкам
     * @param String $counter_param название GET-параметра, через который передается номер текущей страницы
     */
    public function __construct(
        View $view,
        $pdo,
        $tablename, 
        $where = "",
        $params = [],
        $order = "",
        $items_per_page = 10,
        $links_count = 3,
        $get_params = null,
        $counter_param = 'page')
    {
      $this->pdo = $pdo;
      $this->tablename = $tablename;
      $this->where = $where;
      $this->params = $params;
      $this->order = $order;
      // Инициализируем переменные через конструктор базового класса
      parent::__construct(
          $view,
          $items_per_page,
          $links_count,
          $get_params,
          $counter_param);
    }
    /**
     * {@inheritdoc}
     */
    public function getItemsCount()
    {
        // Формируем запрос на получение
        // общего количества записей в таблице
        $query = "SELECT COUNT(*) AS total
                  FROM {$this->tablename}
                  {$this->where}";
        $tot = $this->pdo->prepare($query);
        $tot->execute($this->params);
        return $tot->fetch()['total'];
    }
    /**
     * {@inheritdoc}
     */
    public function getItems()
    {
      // Текущая страница
      $current_page = $this->getCurrentPage();
      // Общее количество страниц
      $total_pages = $this->getPagesCount();
      // Проверяем попадает ли запрашиваемый номер 
      // страницы в интервал от минимального до максимального
      if($current_page <= 0 || $current_page > $total_pages) {
          return 0;
      }
      // Извлекаем позиции текущей страницы
      $arr = [];
      // Номер, начиная с которого следует
      // выбирать строки файла
      $first = ($current_page - 1) * $this->getItemsPerPage();
      // Извлекаем позиции для текущей страницы
      $query = "SELECT * FROM {$this->tablename}
                {$this->where}
                {$this->order}
                LIMIT $first, {$this->getItemsPerPage()}";
      $tbl = $this->pdo->prepare($query);
      $tbl->execute($this->params);

      return $results = $tbl->fetchAll();
    }
}
