<?php

/**
 * Created by PhpStorm.
 * User: Eric
 * Date: 2016/4/9
 * Time: 下午 05:31
 */

require_once "Controller_Base.php";
class Controller_LoginCheck extends Controller_Base
{

    function TODO()
    {
        unset($_SESSION['account']);
        $LoginArray = array('account'=>$_POST["account"],'passwd'=>$_POST["passwd"]);
        if(in_array(null, $LoginArray))
        {
            header('Location: index.html');
            exit;
        }
        $result=$this->model->getData($LoginArray);
        if ($result > 0) {
            $_SESSION['account']=$_POST['account'];
            header('Location: ?');
        }
        else {
            header('Location: ?act=Login');
            exit;
        }

//        $this->view->assign('wel',$count);
//        $dir="ShowHtml/login.html";
//        $this->view->show($dir);
    }
}