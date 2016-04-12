<?php

/**
 * Created by PhpStorm.
 * User: Eric
 * Date: 2016/4/9
 * Time: 下午 05:31
 */

require_once "Controller_Base.php";
class Controller_GetAllMsg extends Controller_Base
{

    function TODO()
    {
        $arr=null;
        $msg=$this->model->getData($arr);
        $remsg=$this->model->getReData($arr);
        $this->view->assign('Msg',$msg);
        $this->view->assign('ReMsg',$remsg);
        $this->view->assign('Account', $_SESSION['account']);
        $dir="ShowHtml/GetAllMsg.php";
        $this->view->show($dir);

    }
}