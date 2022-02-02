<?php 

namespace app\controllers;

use shop\Cache;

class MainController extends AppController
{
    public function indexAction()
    {
        $hits = \R::find('product', "hit = '1' AND status = '1' LIMIT 8");
        $this->setMeta('Home', 'Main page', 'home');
        $this->set(compact('hits'));
    }
}