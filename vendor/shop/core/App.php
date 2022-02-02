<?php

namespace shop;

class App
{
    public static $app;
    public function __construct()
    {
        $query = trim($_SERVER['QUERY_STRING'], '/');
        session_start();
        self::$app = Registry::instance();
        $this->Params();
        new ErrorHandler;
        Router::dispatch($query);
    }
    protected function Params()
    {
        $params = require CONFIG . '/params.php';
        if (!empty($params)) {
            foreach ($params as $k => $v) {
                self::$app->setProperty($k, $v);
            }  
        }
    }
}