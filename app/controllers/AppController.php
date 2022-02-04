<?php

namespace app\controllers;

use app\widgets\Currency\Currency;
use shop\App;
use shop\base\Controller;
use shop\Cache;
use shop\Db;

class AppController extends Controller
{
    public function __construct($route)
    {
        parent::__construct($route);
        Db::instance();
        App::$app->setProperty('currencies', Currency::getCurrencies());
        App::$app->setProperty('currency', Currency::getCurrency(App::$app->getProperty('currencies')));
        App::$app->setProperty('cats', self::cacheCategory()); 
        // debug(App::$app->getProperties());
    }
    protected static function cacheCategory()
    {
        $cache = Cache::instance();
        $cats = $cache->get('cats');
        if (!$cats) {
            $cats = \R::getAssoc('SELECT * FROM category');
            $cache->set('cats', $cats);
        }
        return $cats;
    }
}