<?php

namespace app\controllers;

use app\models\User;

class UserController extends AppController
{
    public function signupAction()
    {
        if (!empty($_POST)) {
            $user = new User;
            $data = $_POST;
            $user->load($data);
            if (!$user->validate($data)) {
                $user->getErrors();
                $_SESSION['form_data'] = $data;
            } else {
                $user->attributes['password'] = password_hash($user->attributes['password'], PASSWORD_DEFAULT);
                if ($user->save('user')) {
                    $user->login();
                    $_SESSION['success'] = 'User regestred';
                } else {
                    $_SESSION['error'] = 'Error';
                }
            }
            redirect();
        }
        $this->setMeta('SignUp', 'signup', 'signup');
    }
    public function loginAction()
    {
        if (!empty($_POST)) {
            $user = new User;
            if ($user->login()) {
                $_SESSION['success'] = 'User entered';
            } else {
                $_SESSION['error'] = 'Error';
            }
            redirect();
        }
        $this->setMeta('LogIn', 'login', 'login');
    }
    public function logoutAction()
    {
        unset($_SESSION['user']);
        redirect();
    }
}
