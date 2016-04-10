<?php

/**
 * Created by PhpStorm.
 * User: Eric
 * Date: 2016/4/8
 * Time: 下午 04:54
 */


class Controller_Base extends \MVC\abstractController
{
    protected $model;
    protected $view;
    function __construct($modelName, $viewName)
    {
        $this->model = new $modelName;
        $this->view = new $viewName;
    }
    function TODO()
    {

    }
}
