<?php

/**
 * Created by PhpStorm.
 * User: Eric
 * Date: 2016/4/7
 * Time: 下午 03:24
 */
include_once "Model_Base.php";

class Model_ReMsg extends Model_Base
{
     public function getData($ArrayVar){
         $db= new DB("MessageBoard");
         $sql = "INSERT INTO ReMessage (Account, Message,Re_Id, UpdateTime) VALUES (:account, :ReMsg,:Re_Id,CURRENT_TIMESTAMP)";
         $db->Exec($sql,$ArrayVar);
         return $ArrayVar[':ReMsg'];
    }


}
