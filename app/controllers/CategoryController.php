<?php

namespace app\controllers;

use app\models\Breadcrumbs;
use app\models\Category;
use shop\App;
use shop\libs\Pagination;

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
        $page = isset($_GET['page']) ? $_GET['page'] : 1;
        $perpage = App::$app->getProperty('pagination');
        $total = \R::count('product', "category_id IN ($ids)");
        $pagination = new Pagination($page, $perpage, $total);
        $start = $pagination->getStart();
        $products = \R::find('product', "status = '1' AND category_id IN ($ids) LIMIT $start, $perpage");
        $this->setMeta($category->title, $category->description, $category->keywords);
        $this->set(compact('breadcrumbs', 'products', 'pagination', 'total'));
    }
}