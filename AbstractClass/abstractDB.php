<?php
/**
 * Created by PhpStorm.
 * User: Eric
 * Date: 2016/4/9
 * Time: 下午 03:12
 */

namespace MVC;


abstract class abstractDB
{
    const _ServerName = "localhost";
    const _UserName = "root";
    const _password = "asdf1234";
    abstract public function Query($sql, $ArrayVar);
}