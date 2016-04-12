<?php
/**
 * Created by PhpStorm.
 * User: Eric
 * Date: 2016/4/7
 * Time: 下午 03:24
 */
    try {
        session_start();
        $act=null;
        if (@$_GET['action']!="" && @$_POST['action']=="")
        {
            $act=$_GET['action'];
        }elseif(@$_GET['action']=="" && @$_POST['action']!=""){
            $act=$_POST['action'];
        }else{
            $act='Main';
        }
        //$act=isset($_GET['action']) ? $_GET['action'] : 'Main';
        $c = "Controller_".$act;
        $m = "model_".$act;
        $v = "view_".$act;

        $path_c="ControllerClass/Controller_".$act.".php";
        $path_m="ModelClass/Model_".$act.".php";
        $path_v="ViewClass/View_".$act.".php";

        require_once $path_c;
        require_once $path_m;
        require_once $path_v;

        $main=new $c($m, $v);
        $main->TODO();
    }catch(Exception $e)
    {
        echo 'Caught exception: ',  $e->getMessage(), "\n";
    }

