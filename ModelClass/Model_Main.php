<?php

/**
 * Created by PhpStorm.
 * User: Eric
 * Date: 2016/4/7
 * Time: 下午 03:24
 */
include_once "Model_Base.php";

class Model_Main extends Model_Base
{
     public function getData($ArrayVar){
         $db= new DB("MessageBoard");
         $sql = "SELECT COUNT(*) FROM login";
         return $db->query($sql,$ArrayVar);
    }
}
