<?php

/**
 * Created by PhpStorm.
 * User: Eric
 * Date: 2016/4/8
 * Time: 下午 04:54
 */

require_once "Controller_Base.php";
class Controller_Main extends Controller_Base
{

    function TODO()
    {
        $arr=null;
        $count=$this->model->getData($arr);
        $this->view->assign('wel',$count);
        $dir="ShowHtml/Main.php";
        $this->view->show($dir);
    }
}