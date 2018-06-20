<?php

namespace App\Http\Pagi;

use Illuminate\Pagination\AbstractPaginator;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Str;

/**
 * Created by PhpStorm.
 * User: Vitalik
 * Date: 09.11.2017
 * Time: 13:03
 */

class Paginate extends AbstractPaginator
{
    public function __construct () {

    }
    //todo будем хранить текущую страницу при интерации
    public static $getNumberPage;

    public function url($page)
    {
        if ($page <= 0) {
            $page = 1;
        }

        // If we have any extra query string key / value pairs that need to be added
        // onto the URL, we will put them in query string form and then attach it
        // to the URL. This allows for extra information like sortings storage.
        $parameters = [$this->pageName => $page];

        if (count($this->query) > 0) {
            $parameters = array_merge($this->query, $parameters);
        }

        $result = $this->path
            .(Str::contains($this->path, '?') ? '&' : '?')
            .http_build_query($parameters, '', '&')
            .$this->buildFragment();

        self::$getNumberPage[$result] = $page;

        return $result;

    }

    /**
     * @return mixed
     *  todo получаем индекс страницы
     */
    public static function getNumberPage ($url)
    {
        return self::$getNumberPage[$url];
    }


    public static function makeLengthAware($collection, $total, $perPage, $q = null)
    {
        $paginator = new LengthAwarePaginator(
            $collection,
            $total,
            $perPage,
            Paginator::resolveCurrentPage(),
            ['path' => Paginator::resolveCurrentPath()]);
        return str_replace('/?', '?', $paginator->links('page.pagination_search', ['fragment_url' => '/search/', 'q' => $q]));
    }
}