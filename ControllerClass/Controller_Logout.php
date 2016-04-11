<?php

/**
 * Created by PhpStorm.
 * User: Eric
 * Date: 2016/4/9
 * Time: 下午 05:31
 */

require_once "Controller_Base.php";
class Controller_Logout extends Controller_Base
{

    function TODO()
    {
        session_destroy();
        header('Location: ?');
    }
}