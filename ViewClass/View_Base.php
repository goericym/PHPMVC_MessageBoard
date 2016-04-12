<?php

/**
 * Created by PhpStorm.
 * User: Eric
 * Date: 2016/4/7
 * Time: 下午 03:24
 */
require_once "AbstractClass/abstractView.php";
class View_Base  extends \MVC\abstractView
{
    public $arr = array();

    function show($dir)
    {
        extract($this->arr);
        require_once $dir;
    }

    function assign($name, $value)
    {
        $this->arr[$name] = $value;
    }
}