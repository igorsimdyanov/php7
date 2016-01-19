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
 * Постраничная навигация для содержимого директории
 *
 * @author D. Koterov <dmitry.koterov@gmail.com>
 * @author I. Simdyanov <igorsimdyanov@gmail.com>
 */
class DirPager extends Pager
{
    /**
     * @var String путь к папке с файлами
     */
    protected $dirname;
    /**
     * Конструктор
     *
     * @param View $view объект класса, осуществляющий вывод постраничной навигации
     * @param String $dir_name путь к папке с файлами
     * @param Integer $items_per_page количество позиций на одной странице
     * @param Integer $links_count количество видимых ссылок слева и справа от текущей страницы
     * @param String $get_params дополнительные параметры, которые необходимо передавать по ссылкам
     * @param String $counter_param название GET-параметра, через который передается номер текущей страницы
     */
    public function __construct(
        View $view,
        $dir_name = '.',
        $items_per_page = 10,
        $links_count = 3,
        $get_params = null,
        $counter_param = 'page')
    {
      // Удаляем последний символ /, если он имеется
      $this->dirname = ltrim($dir_name, "/");
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
        $countline = 0;
        // Открываем директорию
        if(($dir = opendir($this->dirname)) !== false) {
            while(($file = readdir($dir)) !== false) {
                // Если текущая позиция является файлом
                // подсчитываем её
                if(is_file($this->dirname."/".$file)) {
                    $countline++;
                }
            }
            // Закрываем директорию
            closedir($dir);
        }
        return $countline;
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
      // Открываем директорию
      if(($dir = opendir($this->dirname)) === false) {
          return 0;
      }
      $i = -1;
      while(($file = readdir($dir)) !== false)
      {
        // Если текущая позиция является файлом
        if(is_file($this->dirname."/".$file)) {
          // Увеличиваем счётчик
          $i++;
          // Пока не достигнут номер $first
          // досрочно заканчиваем итерацию
          if($i < $first) continue;
          // Если достигнут конец выборки
          // досрочно покидаем цикл
          if($i > $first + $this->getItemsPerPage() - 1) break;
          // Помещаем пути к файлам в массив,
          // который будет возвращён методом
          $arr[] = $this->dirname."/".$file;
        }
      }
      // Закрываем директорию
      closedir($dir);

      return $arr;
    }
}
