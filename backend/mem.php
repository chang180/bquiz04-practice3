<h1 class="ct">會員管理</h1>
<table>
    <tr>
        <td>姓名</td>
        <td>會員帳號</td>
        <td>註冊日期</td>
        <td>操作</td>
    </tr>
<?php
$rows=$Member->all();
foreach($rows as $row){
    if($row['acc']!='admin'){

?>
    <tr>
        <td><?=$row['name'];?></td>
        <td><?=$row['acc'];?></td>
        <td><?=$row['date'];?></td>
        <td>
<a href="?do=edit_mem&id=<?=$row['id'];?>"><button>修改</button></a>
<a href="api/del_mem.php?id=<?=$row['id'];?>"><button>刪除</button></a>
        </td>
    </tr>
    <?php }}?>
</table>