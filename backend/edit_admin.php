<h1 class="ct">修改管理員權限</h1>
<?php $row=$Admin->find($_GET['id']);?>
<form action="api/save_admin.php" method="post">
<input type="hidden" name="id" value="<?=$row['id'];?>">
<table>
    <tr>
        <td>帳號</td>
        <td><input type="text" name="acc" value="<?=$row['acc'];?>"></td>
    </tr>
    <tr>
        <td>密碼</td>
        <td><input type="text" name="pw" value="<?=$row['pw'];?>"></td>
    </tr>
    <tr>
        <td>權限</td>
        <td>
<?php
$pr=unserialize($row['pr']);
?>
<div><input type="checkbox" name="pr[]" value="1" <?=in_array("1",$pr)?"checked":"";?>>商品分類與管理</div>
<div><input type="checkbox" name="pr[]" value="2" <?=in_array("2",$pr)?"checked":"";?>>訂單管理</div>
<div><input type="checkbox" name="pr[]" value="3" <?=in_array("3",$pr)?"checked":"";?>>會員管理</div>
<div><input type="checkbox" name="pr[]" value="4" <?=in_array("4",$pr)?"checked":"";?>>頁尾版權管理</div>
<div><input type="checkbox" name="pr[]" value="5" <?=in_array("5",$pr)?"checked":"";?>>最新消息管理</div>
        </td>
    </tr>
</table>
<div class="ct"><button>修改</button><button type="reset">重置</button></div>
</form>