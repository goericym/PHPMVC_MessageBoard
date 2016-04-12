<?php

/**
 * Created by PhpStorm.
 * User: Eric
 * Date: 2016/4/9
 * Time: 下午 05:31
 */

require_once "Controller_Base.php";
class Controller_NewMsg extends Controller_Base
{

    function TODO()
    {
        $arr= array(":account"=> $_SESSION['account'],":NewMsg" =>$_POST['NewMsg']);
        $msg=$this->model->getData($arr);
        $this->view->assign('Msg',$msg);
        $this->view->assign('Account', $_SESSION['account']);
        $dir="ShowHtml/NewMsg.php";
        $this->view->show($dir);

    }
}