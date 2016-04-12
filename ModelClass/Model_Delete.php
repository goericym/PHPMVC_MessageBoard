<?php

/**
 * Created by PhpStorm.
 * User: Eric
 * Date: 2016/4/7
 * Time: 下午 03:24
 */
include_once "Model_Base.php";

class Model_Delete extends Model_Base
{
     public function getData($ArrayVar){
         $db= new DB("MessageBoard");
         $sql = "DELETE FROM message WHERE id = :id and Account=:account";
         $result=$db->Exec($sql,$ArrayVar);
         return $result;
    }


}
