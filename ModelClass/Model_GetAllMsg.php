<?php

/**
 * Created by PhpStorm.
 * User: Eric
 * Date: 2016/4/7
 * Time: 下午 03:24
 */
include_once "Model_Base.php";

class Model_GetAllMsg extends Model_Base
{
     public function getData($ArrayVar){
         $db= new DB("MessageBoard");
         $sql = "SELECT * FROM message";
         $arr = null;
         return   $db->query($sql, $arr);
    }
    public function getReData($ArrayVar){
        $db= new DB("MessageBoard");
        $sql = "SELECT * FROM ReMessage";
        $arr = null;
        return $db->query($sql, $arr);
    }

}
