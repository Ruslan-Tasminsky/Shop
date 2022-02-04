<?php

namespace shop\base;

use shop\Db;
use Valitron\Validator;

class Modal
{
    public $attributes = [];
    public $rules = [];
    public $errors = [];
    public function __construct()
    {
        Db::instance();
    }
    public function load($data)
    {
        foreach ($this->attributes as $name => $value) {
            if (isset($data[$name])) {
                $this->attributes[$name] = $data[$name];
            }
        }
    }
    public function save($table, $valid = true)
    {
        if ($valid) {
            $tbl = \R::dispense($table);
        } else {
            $tbl = \R::xdispense($table);
        }
        foreach ($this->attributes as $name => $value) {
            $tbl->$name = $value;
        }
        return \R::store($tbl);
    }
    public function updata($table, $id)
    {
        $bean = \R::load($table, $id);
        foreach ($this->attributes as $name => $value) {
            $bean->$name = $value;
        }
        return \R::store($bean);
    }
    public function validate($data)
    {
        $v = new Validator($data);
        $v->rules($this->rules);
        if ($v->validate()) {
            return true;
        }
        $this->errors = $v->errors();
        return false;
    }
    public function getErrors()
    {
        $errors = '<ul>';
        foreach ($this->errors as $error => $item) {
            $errors .= "<li>$item</li>";
        }
        $errors .= '</ul>';
        $_SESSION['error'] = $errors;
    }
}
