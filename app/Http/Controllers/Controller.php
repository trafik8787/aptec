<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class Controller extends BaseController
{

    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    private static $title;
    private static $description;
    private static $keywords;
    private static $blocs = [];

    /**
     * Controller constructor.
     */
    public function __construct () {
        self::$title =  config('config_seo.default.title');
        self::$description = config('config_seo.default.description');
        self::$keywords = config('config_seo.default.keywords');
    }

    /**
     * @return \Illuminate\Config\Repository|mixed
     */
    public static function getSeoTitle ()
    {
        return self::$title;
    }

    /**
     * @return \Illuminate\Config\Repository|mixed
     */
    public static function getSeoDescription ()
    {
        return self::$description;
    }

    /**
     * @return \Illuminate\Config\Repository|mixed
     */
    public static function getSeoKeywords ()
    {
        return self::$keywords;
    }

    /**
     * @param string $value
     */
    public static function setSeoTitle (string $value)
    {
        self::$title = $value;
    }

    /**
     * @param string $value
     */
    public static function setSeoDescription (string $value)
    {
        self::$description = $value;
    }

    /**
     * @param string $value
     */
    public static function setSeoKeywords (string $value)
    {
        self::$keywords = $value;
    }

    public static function setBlocRenderLeft (array $bloc)
    {
        self::$blocs = $bloc;
    }

    public static function getBlocRenderLeft ()
    {
        return self::$blocs;
    }
    
}
