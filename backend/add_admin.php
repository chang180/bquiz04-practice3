<h1 class="ct">新增管理帳號</h1>
<form action="api/save_admin.php" method="post">
<table>
    <tr>
        <td>帳號</td>
        <td><input type="text" name="acc"></td>
    </tr>
    <tr>
        <td>密碼</td>
        <td><input type="text" name="pw"></td>
    </tr>
    <tr>
        <td>權限</td>
        <td>
<div><input type="checkbox" name="pr[]" value="1">商品分類與管理</div>
<div><input type="checkbox" name="pr[]" value="2">訂單管理</div>
<div><input type="checkbox" name="pr[]" value="3">會員管理</div>
<div><input type="checkbox" name="pr[]" value="4">頁尾版權管理</div>
<div><input type="checkbox" name="pr[]" value="5">最新消息管理</div>
        </td>
    </tr>
</table>
<div class="ct"><button>新增</button><button type="reset">重置</button></div>
</form>