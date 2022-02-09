<?php

namespace app\controllers;

class AllController extends AppController
{
    public function indexAction()
    {
        $products = \R::findAll('product');
        $this->setMeta('All products', 'all', 'all');
        $this->set(compact('products'));
    }
}