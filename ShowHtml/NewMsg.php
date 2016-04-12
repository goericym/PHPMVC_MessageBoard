<?php
/**
 * Created by PhpStorm.
 * User: Eric
 * Date: 2016/4/12
 * Time: 下午 03:57
 */
$result= $Msg;
$html='';
foreach ($result as $row) {
    $html.= '<hr><div class="main'.$row['id'].'">';
    $html.= '留言'. $row['id'] .' / ' . $row['Account'] . ' / <font size="1">' . $row['UpdateTime']. '</font>
				   <br><br>
				   <input type="text" id="Msg'.$row['id'].'" name="Msg'.$row['id'].'" value="'.$row['Message'].'">
				   <br>';
    $html.= '<p align="right"><span style="float:left"><a href="javascript:void(0)" onclick="DoReMsg('.$row['id'].');">回覆</a></span>';
    if($row['Account']==$Account)
    {
        $html.= '<span style="float:right"><a href="javascript:void(0)" onclick="DoModify('.$row['id'].')">修改</a> / <a href="javascript:void(0)" onclick="DoDelete('.$row['id'].')">刪除</a>';
    }
    $html.= '</span></p><br>';
    $html.= '</div>';
}
echo $html;
?>