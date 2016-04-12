<?php

/**
 * Created by PhpStorm.
 * User: Eric
 * Date: 2016/4/9
 * Time: 下午 05:31
 */

require_once "Controller_Base.php";
class Controller_RegeditCheck extends Controller_Base
{

    function TODO()
    {

        unset($_SESSION['account']);

        $RegeditArray = array('account'=>$_POST["account"],'username'=>$_POST["username"],'passwd'=>$_POST["passwd"],'check_passwd'=>$_POST["check_passwd"] );

        if(in_array(null, $RegeditArray))
        {
            header('Location: index.html');
            exit;
        }

        $count=$this->model->getCount($RegeditArray);

        if ($count > 0) {
            $this->view->assign('account', $_POST['account']);
            $dir="ShowHtml/RegeditError.html";
            $this->view->show($dir);
            exit;
        }

        $result =$this->model->getData($RegeditArray);
        if($result)
        {
            $_SESSION['account']=$_POST['account'];
        }
        header('Location: ?');

    }
}