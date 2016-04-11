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
        if(!isset($_SESSION['account']))
        {
            $_SESSION['account']="";
        }
        $arr=null;
//        $count=$this->model->getData($arr);

        $this->view->assign('account', $_SESSION['account']);
        $dir="ShowHtml/Main.php";
        $this->view->show($dir);
    }
}