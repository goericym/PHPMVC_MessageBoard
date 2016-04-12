<?PHP
$result= $Msg;
$result1= $ReMsg;
$RowCount=count($result);

$count=0;
$html='';
foreach ($result as $row) {

$count++;
$html.= '<div class="main' . $row['id'] . '">';
    $html.= '留言' . $row['id'] . ' / ' . $row['Account'] . ' / <font size="1">' . $row['UpdateTime'] . '</font>
    <br><br>
    <input type="text"  id="Msg' . $row['id'] . '" name="Msg' . $row['id'] . '" value="' . $row['Message'] . '">
    <br>
    <p align="right">';
        if ($Account != "") {
        $html.= '<span  style="float:left"><a href="javascript:void(0)" onclick="DoReMsg(' . $row['id'] . ');">回覆</a></span>';
        }
        if ($row['Account'] == $Account) {
        $html.= '<span style="float:right"><a href="javascript:void(0)" onclick="DoModify(' . $row['id'] . ')">修改</a> / <a href="javascript:void(0)" onclick="DoDelete(' . $row['id'] . ')">刪除</a></span>';
        }
        $html.= '</p><br>';

    foreach ($result1 as $row1) {

    if($row1['Re_Id']==$row['id']){
    $html.= '<div><blockquote><li>' . $row1['Message'] . '</li></blockquote></div>';
    }
    }
    $html.= '</div>';
if ($count != $RowCount) {
$html.= '<hr>';
}
}
echo $html;
?>