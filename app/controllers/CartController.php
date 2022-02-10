<?php

namespace app\controllers;

use app\models\Cart;
use app\models\Order;
use app\models\User;

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
    public function clearAction()
    {
        unset($_SESSION['cart']);
        unset($_SESSION['cart.sum']);
        unset($_SESSION['cart.qty']);
        unset($_SESSION['cart.currency']);
        redirect();
    }
    public function checkoutAction()
    {
        if (!empty($_POST)) {
            if (!User::checkAuth()) {
                $user = new User;
                $data = $_POST;
                $user->load($data);
                if (!$user->validate($data) || !$user->checkUnique()) {
                    $user->getErrors();
                    $_SESSION['error'] = 'Error';
                    redirect();
                } else {
                    $user->attributes['password'] = password_hash($user->attributes['password'], PASSWORD_DEFAULT);
                    if (!$user->save('user')) {
                        $_SESSION['error'] = 'Error';
                        redirect();
                    } else {
                        $user->login();
                    }
                }
            }
            // сохранение заказа
            $data['user_id'] = isset($user_id) ? $user_id : $_SESSION['user']['id'];
            $data['note'] = !empty($_POST['note']) ? $_POST['note'] : '';
            $user_email = isset($_SESSION['user']['email']) ? $_SESSION['user']['email'] : $_POST['email'];
            $order_id = Order::saveOrder($data);
            Order::mailOrder($order_id, $user_email);
        }
        redirect();
    }
}
