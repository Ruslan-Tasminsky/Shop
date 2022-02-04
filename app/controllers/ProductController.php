<?php

namespace app\controllers;

use app\modal\Breadcrumbs;

class ProductController extends AppController
{
   public function viewAction()
   {
       $alias = $this->route['alias'];
       $product = \R::findOne('product', 'alias = ?', [$alias]);
       if (!$product) {
           throw new \Exception("Product not found", 500);
       }
       $breadcrumbs = Breadcrumbs::getBreadcrumbs($product->category_id, $product->title);
       $gallery = \R::find('gallery', 'product_id = ?', [$product->id]);
       $related = \R::getAll('SELECT * FROM related_product JOIN product ON product.id = related_product.related_id WHERE related_product.product_id = ?', [$product->id]);
       $this->set(compact('product', 'breadcrumbs', 'gallery', 'related'));
   }
}
