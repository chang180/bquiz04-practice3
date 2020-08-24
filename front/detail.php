<?php
$row = $Goods->find($_GET['id']);
?>
<h1 class="ct"><?= $row['name']; ?></h1>
<div style="display:flex">
    <div><img src="img/<?= $row['img']; ?>" style="width:300px;height:200px"></div>
    <div>
        <div>分類：<?= $_GET['nav']; ?></div>
        <div>編號：<?= $row['no']; ?></div>
        <div>價格：<?= $row['price']; ?></div>
        <div>詳細說明：<?= $row['intro']; ?></div>
        <div>庫存量：<?= $row['stock']; ?></div>
    </div>
</div>
<form action="?" method="get">
    <input type="hidden" name="id" value="<?=$_GET['id'];?>">
    <input type="hidden" name="do" value="buycart">
    <div class="ct">購買數量<input type="number" name="qt"><button><img src="img/0402.jpg"></button></div>
</form>
<div class="ct"><button onclick="history.go(-1)">返回</button></div>