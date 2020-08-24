<form action="api/add_type.php" method="post">
<?php $row=$Type->find($_GET['id']);?>
<input type="hidden" name="id" value="<?=$row['id'];?>">
分類名稱：<input type="text" name="text" value="<?=$row['text'];?>"><button>確定修改</button>
</form>