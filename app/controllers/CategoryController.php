<?php

namespace app\controllers;

use app\models\Breadcrumbs;
use app\models\Category;

class CategoryController extends AppController
{
    public function viewAction()
    {
        $alias = $this->route['alias'];
        $category = \R::findOne('category', 'alias = ?', [$alias]);
        if (!$category) {
            throw new \Exception("Category {$alias} not found", 500);
        }
        $breadcrumbs = Breadcrumbs::getBreadcrumbs($category->id);
        $cat_model = new Category;
        $ids = $cat_model->getIds($category->id);
        $ids = !$ids ? $category->id : $ids . $category->id;
        $products = \R::find('product', "status = '1' AND category_id IN ($ids)");
        $this->setMeta($category->title, $category->description, $category->keywords);
        $this->set(compact('breadcrumbs', 'products'));
    }
    public function allAction()
    {
        $products = \R::findAll('product');
        $this->setMeta('All products', 'all', 'all');
        $this->set(compact('products'));
    }
}