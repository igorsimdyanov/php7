<?php
/**
 * ISPager - постраничная навигация
 *
 * @license http://opensource.org/licenses/gpl-license.php GNU Public License
 *
 * @package    ISPager
 * @subpackage ISPager\View
 */

namespace ISPager;

/**
 * Класс представления постраничной навигации в виде диапазонов элементов
 *
 * @author D. Koterov <dmitry.koterov@gmail.com>
 * @author I. Simdyanov <igorsimdyanov@gmail.com>
 *
 * @abstract
 */
class ItemsRange extends View
{
    /**
     * Формирует представление диапазона
     *
     * @param Integer $start начало диапазона
     * @param Integer $end окончание диапазона
     * @return String
     */
    public function range($first, $second)
    {
        return "[{$first}-{$second}]";
    }
    /**
     * Формирует строку постраничной навигации
     *
     * @param Pager $pager объект постраничной навигации
     * @return String
     */
    public function render(Pager $pager) {

        // Объект постраничной навигации
        $this->pager = $pager;

        // Строка для возвращаемого результата
        $return_page = "";

        // Текущий номер страницы
        $current_page = $this->pager->getCurrentPage();
        // Общее количество страниц
        $total_pages = $this->pager->getPagesCount();

        // Проверяем есть ли ссылки слева
        if($current_page - $this->pager->getVisibleLinkCount() > 1) {
            $range = $this->range(1, $this->pager->getItemsPerPage());
            $return_page .= $this->link($range, 1)." ... ";
            // Есть
            $init = $current_page - $this->pager->getVisibleLinkCount();
            for($i = $init; $i < $current_page; $i++) {
                $range = $this->range(
                    (($i - 1) * $this->pager->getItemsPerPage() + 1),
                    $i * $this->pager->getItemsPerPage());
                $return_page .= " ".$this->link($range, $i)." ";
            }
        } else {
            // Нет
            for($i = 1; $i < $current_page; $i++) {
                $range = $this->range(
                    (($i - 1) * $this->pager->getItemsPerPage() + 1),
                    $i * $this->pager->getItemsPerPage());
                $return_page .= " ".$this->link($range, $i)." ";
            }
        }
        // Проверяем есть ли ссылки справа
        if($current_page + $this->pager->getVisibleLinkCount() < $total_pages) {
            // Есть
            $cond = $current_page + $this->pager->getVisibleLinkCount();
            for($i = $current_page; $i <= $cond; $i++) {
                if($current_page == $i) {
                    $return_page .= " ".$this->range(
                        (($i - 1) * $this->pager->getItemsPerPage() + 1),
                        $i * $this->pager->getItemsPerPage())." ";
                } else {
                    $range = $this->range(
                        (($i - 1) * $this->pager->getItemsPerPage() + 1),
                        $i * $this->pager->getItemsPerPage());
                    $return_page .= " ".$this->link($range, $i)." ";
                }
            }
            $range = $this->range(
                (($total_pages - 1) * $this->pager->getItemsPerPage() + 1),
                $this->pager->getItemsCount());
            $return_page .= " ... ".$this->link($range, $total_pages)." ";
        } else {
            // Нет
            for($i = $current_page; $i <= $total_pages; $i++) {
                if($total_pages == $i) {
                    if($current_page == $i) {
                        $return_page .= " ".$this->range(
                            (($i - 1) * $this->pager->getItemsPerPage() + 1),
                            $this->pager->getItemsCount())." ";
                    } else {
                        $range = $this->range(
                            (($i - 1) * $this->pager->getItemsPerPage() + 1),
                            $this->pager->getItemsCount());
                        $return_page .= " ".$this->link($range, $i)." ";
                    }
                } else {
                    if($current_page == $i) {
                        $return_page .= " ".$this->range(
                            (($i - 1) * $this->pager->getItemsPerPage() + 1),
                            $i * $this->pager->getItemsPerPage())." ";
                    } else {
                        $range = $this->range(
                            (($i - 1) * $this->pager->getItemsPerPage() + 1),
                            ($i * $this->pager->getItemsPerPage()));
                        $return_page .= " ".$this->link($range, $i)." ";
                    }
                }
            }
        }
        return $return_page;
    }
}
