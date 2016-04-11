<?php

/**
 * Created by PhpStorm.
 * User: Eric
 * Date: 2016/4/7
 * Time: 下午 03:24
 */
include_once "Model_Base.php";

class Model_RegeditCheck extends Model_Base
{
     public function getData($ArrayVar){
         $db= new DB("MessageBoard");
         $sql = "INSERT INTO login (Account, Passwd, UserName, CreateTime) VALUES (:account, :passwd, :username,CURRENT_TIMESTAMP)";
         $arr= array(":account"=> $ArrayVar['account'],":passwd" =>$ArrayVar['passwd'],":username"=>$ArrayVar['username']);
         $db->Exec($sql,$arr);
         return true;
    }
    public function getCount($ArrayVar){
        $db= new DB("MessageBoard");
        $sql = "SELECT COUNT(*) FROM login where account=:account LIMIT 1";
        $arr= array(":account"=> $ArrayVar['account']);
        return $db->Count($sql,$arr);
    }

}
