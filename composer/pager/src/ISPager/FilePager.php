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
 * Постраничная навигация для содержимого файла
 *
 * @author D. Koterov <dmitry.koterov@gmail.com>
 * @author I. Simdyanov <igorsimdyanov@gmail.com>
 */
class FilePager extends Pager
{
    /**
     * @var String путь файлу
     */
    protected $filename;
    /**
     * Конструктор
     *
     * @param View $view объект класса, осуществляющий вывод постраничной навигации
     * @param String $filename путь к файлу
     * @param Integer $items_per_page количество позиций на одной странице
     * @param Integer $links_count количество видимых ссылок слева и справа от текущей страницы
     * @param String $get_params дополнительные параметры, которые необходимо передавать по ссылкам
     * @param String $counter_param название GET-параметра, через который передается номер текущей страницы
     */
    public function __construct(
        View $view,
        $filename = '.',
        $items_per_page = 10,
        $links_count = 3,
        $get_params = null,
        $counter_param = 'page')
    {
      $this->filename   = $filename;
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
        // Открываем файл
        $fd = fopen($this->filename, "r");
        if($fd) {
            // Подсчитываем количество записей в файле
            while(!feof($fd)) {
                fgets($fd, 10000);
                $countline++;
            }
            // Закрываем файл
            fclose($fd);
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
        // Количество позиций
        $total = $this->getItemsCount();
        // Общее количество страниц
        $total_pages = $this->getPagesCount();
        // Проверяем попадает ли запрашиваемый номер 
        // страницы в интервал от минимального до максимального
        if($current_page <= 0 || $current_page > $total_pages) {
            return 0;
        }
        // Извлекаем позиции текущей страницы
        $arr = [];
        $fd = fopen($this->filename, "r");
        if(!$fd) return 0;
        // Номер, начиная с которого следует
        // выбирать строки файла
        $first = ($current_page - 1) * $this->getItemsPerPage();
        for($i = 0; $i < $total; $i++) {
            $str = fgets($fd, 10000);
            // Пока не достигнут номер $first
            // досрочно заканчиваем итерацию
            if($i < $first) continue;
            // Если достигнут конец выборки
            // досрочно покидаем цикл
            if($i > $first + $this->getItemsPerPage() - 1) break;
            // Помещаем строки файла в массив,
            // который будет возвращён методом
            $arr[] = $str;
        }
        fclose($fd);

        return $arr;
    }
}
