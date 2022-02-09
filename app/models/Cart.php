<?php

namespace app\models;

use shop\App;

class Cart extends AppModel
{
    public function addToCart($product, $qty = 1)
    {
        if(!isset($_SESSION['cart.currency'])){
            $_SESSION['cart.currency'] = App::$app->getProperty('currency');
        }
        if(isset($_SESSION['cart'][$product->id])){
            $_SESSION['cart'][$product->id]['qty'] += $qty;
            $_SESSION['cart'][$product->id]['price'] = $product->price * $_SESSION['cart'][$product->id]['qty'] * $_SESSION['cart.currency']['value'];
        }else{
            $_SESSION['cart'][$product->id] = [
                'qty' => $qty,
                'title' => $product->title,
                'alias' => $product->alias,
                'price' => $product->price * $_SESSION['cart.currency']['value'],
                'img' => $product->img,
            ];
        }
        $_SESSION['cart.qty'] = isset($_SESSION['cart.qty']) ? $_SESSION['cart.qty'] + $qty : $qty;
        $_SESSION['cart.sum'] = isset($_SESSION['cart.sum']) ? $_SESSION['cart.sum'] + $qty * ($product->price * $_SESSION['cart.currency']['value']) : $qty * ($product->price * $_SESSION['cart.currency']['value']);
    }
    public function deleteItem($id)
    {
        $qtyMinus = $_SESSION['cart'][$id]['qty'];
        $sumMinus = $_SESSION['cart'][$id]['qty'] * $_SESSION['cart'][$id]['price'];
        $_SESSION['cart.qty'] -= $qtyMinus;
        $_SESSION['cart.sum'] -= $sumMinus;
        unset($_SESSION['cart'][$id]);
    }
    public static function recalc($curr)
    {
        if (isset($_SESSION['cart.currency'])) {
            if ($_SESSION['cart.currency']['base']) {
                $_SESSION['cart.sum'] *= $curr->value;
            } else {
                $_SESSION['cart.sum'] = $_SESSION['cart.sum'] / $_SESSION['cart.currency']['value'] * $curr->value;
            }
            foreach ($_SESSION['cart'] as $k => $v) {
                if ($_SESSION['cart.currency']['base']) {
                    $_SESSION['cart'][$k]['price'] *= $curr->value;
                } else {
                    $_SESSION['cart'][$k]['price'] = $_SESSION['cart'][$k]['price'] / $_SESSION['cart.currency']['value'] * $curr->value;
                }
            }
            foreach ($curr as $k => $v) {
                $_SESSION['cart.currency'][$k] = $v;
            }
        }
    }
}
