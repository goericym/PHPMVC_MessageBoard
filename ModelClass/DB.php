<?php

/**
 * Created by PhpStorm.
 * User: eric_yang
 * Date: 2016/3/29
 * Time: 下午 12:03
 */

require_once "AbstractClass/abstractDB.php";
class DB extends \MVC\abstractDB
{
    private $_conn;

    public function __construct($DB_Name)
    {
        $_dbName= $DB_Name ;
        $host=DB::_ServerName;
        $this->_conn = new PDO("mysql:host=$host;dbname=$_dbName", DB::_UserName, DB::_password);
        $this->_conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $this->_conn->exec("SET NAMES utf8");
    }
    public  function query($sql,$ArrayVar){
        $sth = $this->_conn->prepare($sql, array(PDO::ATTR_CURSOR => PDO::CURSOR_FWDONLY));
        $sth->execute($ArrayVar);
        $res = $sth->fetchAll();
        return $res;
    }
    public  function Count($sql,$ArrayVar){
        $sth = $this->_conn->prepare($sql, array(PDO::ATTR_CURSOR => PDO::CURSOR_FWDONLY));
        $sth->execute($ArrayVar);
        $count = $sth->fetchColumn();
        return $count;
    }
    public  function Exec($sql,$ArrayVar)
    {
        $sth = $this->_conn->prepare($sql, array(PDO::ATTR_CURSOR => PDO::CURSOR_FWDONLY));
        return $sth->execute($ArrayVar);
    }
    public  function GetLastId()
    {
        return $this->_conn->lastInsertId();
    }
    function __destruct()
    {
        $this->_conn = null;
    }
}
