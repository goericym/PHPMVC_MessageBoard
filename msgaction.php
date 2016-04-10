<?php
/**
 * Created by PhpStorm.
 * User: Eric
 * Date: 2016/4/10
 * Time: 下午 08:38
 */
switch (@$_POST['action']) {
    case "Main":
        echo "i equals 0";
        exit;
        break;
    case 1:
        echo "i equals 1";
        break;
    case 2:
        echo "i equals 2";
        break;
}
?>