<?php
	if(!isset($_SESSION['account']))
	{
		$_SESSION['account']="";
	}
?>
<html>
<!DOCTYPE html>
<html>
<head>
    <title>PHP練習main</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/styles.css">
    <script src="js/jquery-2.2.2.min.js"></script>
    <script src="js/myScript.js"></script>

</head>
<body onload="AutoLoad()">
<div class="center">
    <form id="myForm" action="index.php" method="post">
        <input type="hidden" id="action" name="action" value="NewMsg">
        <input type="hidden" id="hid" name="hid" value="">
        <table >

            <caption>PHP練習_留言版</caption>

            <tr>
                <td>
                    <div align="right">
                        <?php
    if($_SESSION['account']=="")
    {
        echo '<a href="?act=Login">登入</a>';
                        }else{
                        echo '<a href="?act=Logout">登出</a>';
                        }
                        ?>

                    </div>
                    <div style="text-align:center" id="loadingIMG" style="display:none"><img src="image/loading.gif" height='44'/></div>
                    <div class="main">
                    </div>

                    <div class ="NewMsg">
                    </div>
                    <?php
    if ($_SESSION['account']!=""){

                    }
                    ?>

                </td>
            </tr>

        </table>
    </form>
</div>
</body>
</html>
