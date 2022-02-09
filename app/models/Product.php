<?php

namespace app\models;

class Product extends AppModel
{
    public function setRecently($id)
    {
        $recently = $this->getAllRecently();
        if (!$recently) {
            setcookie('recently', $id, time() + 3600 * 24, '/');
        } else {
            $recently = explode('.', $recently);
            if (!in_array($id, $recently)) {
                $recently[] = $id;
                $recently = implode('.', $recently);
                setcookie('recently', $recently, time() + 3600 * 24, '/');
            }
        }
    }
    public function getRecently()
    {
        if (!empty($_COOKIE['recently'])) {
            $recently = $_COOKIE['recently'];
            $recently = explode('.', $recently);
            return array_slice($recently, -3);
        }
        return false;
    }
    public function getAllRecently()
    {
        if (!empty($_COOKIE['recently'])) {
            return $_COOKIE['recently'];
        }
        return false;
    }
}
