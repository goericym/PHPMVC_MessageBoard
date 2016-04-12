<?php

/**
 * Created by PhpStorm.
 * User: Eric
 * Date: 2016/4/9
 * Time: 下午 05:31
 */

require_once "Controller_Base.php";
class Controller_ReMsg extends Controller_Base
{

    function TODO()
    {
        $arr= array(":account"=> $_SESSION['account'],":ReMsg" =>$_POST['ReMsg'],":Re_Id" =>$_POST['Re_Id']);
        $msg=$this->model->getData($arr);
        $this->view->assign('Msg',$msg);
        $this->view->assign('Account', $_SESSION['account']);
        $dir="ShowHtml/ReMsg.php";
        $this->view->show($dir);

    }
}