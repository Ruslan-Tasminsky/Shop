<?php

namespace app\controllers;

use app\models\Breadcrumbs;
use app\models\Product;

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
       $p_modal = new Product;
       $p_modal->setRecently($product->id);
       $r_viewed = $p_modal->getRecently();
       $recently = null;
       if ($r_viewed) {
           $recently = \R::find('product', 'id IN (' . \R::genSlots($r_viewed) . ') LIMIT 3', $r_viewed);
       }
       $this->setMeta($product->title, $product->description, $product->keywords);
       $this->set(compact('product', 'breadcrumbs', 'gallery', 'related', 'recently'));
   }
}
