<h1 class="ct">訂單管理</h1>
<table>
    <tr>
        <td>訂單編號</td>
        <td>金額</td>
        <td>會員帳號</td>
        <td>姓名</td>
        <td>下單時間</td>
        <td>操作</td>
    </tr>
<?php
$rows=$Ord->all();
foreach($rows as $row){
?>
    <tr>
        <td><a href="?do=detail&id=<?=$row['id'];?>"><?=$row['no'];?></a></td>
        <td><?=$row['total'];?></td>
        <td><?=$row['acc'];?></td>
        <td><?=$row['name'];?></td>
        <td><?=$row['date'];?></td>
        <td><a href="api/del_order.php?id=<?=$row['id'];?>">刪除</a></td>
    </tr>
<?php } ?>
</table>