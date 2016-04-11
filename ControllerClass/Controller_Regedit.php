<?php

/**
 * Created by PhpStorm.
 * User: Eric
 * Date: 2016/4/9
 * Time: 下午 05:31
 */

require_once "Controller_Base.php";
class Controller_Regedit extends Controller_Base
{

    function TODO()
    {
        $dir="ShowHtml/Regedit.html";
        $this->view->show($dir);
    }
}