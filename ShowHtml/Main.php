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

            <caption>PHP練習_留言版<?php echo $account;?></caption>

            <tr>
                <td>
                    <div align="right">
                        <?php
                        if($account=="")
                        {
                             echo '<a href="?action=Login">登入</a>';
                        }else{
                             echo '<a href="?action=Logout">登出</a>';
                        }
                        ?>

                    </div>
                    <div style="text-align:center" id="loadingIMG" style="display:none"><img src="image/loading.gif" height='44'/></div>
                    <div class="main">
                    </div>

                    <div class ="NewMsg">
                    </div>
                    <?php
                    if ($account!=""){
                        echo '<hr color="green">
                        <b>新留言</b> <font class="FontColorClass01">  </font>
                        <br><br>
                        <input type="text" name="NewMsg" id="NewMessage">
                        <p id="tip01" style="display:none">請輸入留言!</p>
                        <p align="right"> <input class="button" type="button" value="發佈" onclick="Check_Main()"> <input type="reset" value="取消"></p>';
                    }
                    ?>

                </td>
            </tr>

        </table>
    </form>
</div>
</body>
</html>
