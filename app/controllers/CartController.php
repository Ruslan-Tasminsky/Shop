<?php

namespace app\controllers;

use app\models\Cart;

class CartController extends AppController
{
    public function addAction()
    {
        $id = isset($_GET['id']) ? $_GET['id'] : null;
        if ($id) {
            $product = \R::findOne('product', 'id = ?', [$id]);
            $cart = new Cart();
            $cart->addToCart($product);
        } 
        redirect();
    }
    public function showAction()
    {
        $this->setMeta('Cart', 'cart', 'cart');
    }
    public function deleteAction()
    {
        $id = !empty($_GET['id']) ? $_GET['id'] : null;
        if (isset($_SESSION['cart'][$id])) {
            $cart = new Cart;
            $cart->deleteItem($id);
        }
        redirect();
    }
    public function clearAction ()
    {
        unset($_SESSION['cart']);
        unset($_SESSION['cart.sum']);
        unset($_SESSION['cart.qty']);
        unset($_SESSION['cart.currency']);
        redirect();
    }
}
