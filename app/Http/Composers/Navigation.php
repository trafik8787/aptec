<?php
namespace App\Http\Composers;

use App\Http\Node\Model\PageNodeModel;
use Illuminate\Contracts\View\View;


/**
 * Class Navigation
 * @package App\Http\Composers
 * todo Класс формируем данные для навигации
 */
class Navigation
{
    protected $page;

    /**
     * Navigation constructor.
     * @param PageNodeModel $model
     */
    public function __construct (PageNodeModel $model) {
        $this->page = $model;
    }
    /**
     * @param View $view
     */
    public function compose (View $view)
    {
        $view->with(['nav_category' => $this->page->select('name', 'href')->get()->toArray()]);

    }
}