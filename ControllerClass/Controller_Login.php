<?php

/**
 * Created by PhpStorm.
 * User: Eric
 * Date: 2016/4/9
 * Time: 下午 05:31
 */

require_once "Controller_Base.php";
class Controller_Login extends Controller_Base
{

    function TODO()
    {
        $arr=null;
        $count=$this->model->getData($arr);
        $this->view->assign('wel',$count);
        $dir="ShowHtml/login.html";
        $this->view->show($dir);
    }
}