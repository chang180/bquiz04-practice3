<h1 class="ct"><a href="?do=add_admin"><button>新增管理員</button></a></h1>
<table>
    <tr>
        <td>帳號</td>
        <td>密碼</td>
        <td>管理</td>
    </tr>
<?php
$rows=$Admin->all();
foreach($rows as $row){
    if($row['acc']!='admin'){

?>
    <tr>
        <td><?=$row['acc'];?></td>
        <td><?=$row['pw'];?></td>
        <td>
<a href="?do=edit_admin&id=<?=$row['id'];?>"><button>修改</button></a>
<a href="api/del_admin.php?id=<?=$row['id'];?>"><button>刪除</button></a>
        </td>
    </tr>
    <?php }}?>
</table>
<div class="ct"><button onclick="location.href='index.php'">返回</button></div>