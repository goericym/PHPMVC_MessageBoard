<?php

/**
 * Created by PhpStorm.
 * User: Eric
 * Date: 2016/4/7
 * Time: 下午 03:24
 */
include_once "Model_Base.php";

class Model_NewMsg extends Model_Base
{
     public function getData($ArrayVar){
         $db= new DB("MessageBoard");
         $sql = "INSERT INTO message (Account, Message, UpdateTime) VALUES (:account, :NewMsg,CURRENT_TIMESTAMP)";
         $db->Exec($sql,$ArrayVar);
         $lastId = $db->GetLastId();
         $sql="SELECT * FROM message where id=:lastId";
         $arr= array(":lastId"=> $lastId);
         return $db->query($sql,$arr);

    }


}
