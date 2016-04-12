<?php

/**
 * Created by PhpStorm.
 * User: Eric
 * Date: 2016/4/9
 * Time: 下午 05:31
 */

require_once "Controller_Base.php";
class Controller_Delete extends Controller_Base
{

    function TODO()
    {
        $arr=array(':id' => $_POST['hid'],':account'=> $_SESSION['account']);
        $msg=$this->model->getData($arr);

//        $this->view->assign('Msg',$msg);
//        $this->view->assign('Account', $_SESSION['account']);
//        $dir="ShowHtml/ReMsg.php";
//        $this->view->show($dir);

    }
}