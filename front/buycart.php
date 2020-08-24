<?php
if (empty($_SESSION['login'])) {
    echo "請先登入";
    exit;
}
if (!empty($_GET['id'])) {
    $_SESSION['cart'][$_GET['id']] = $_GET['qt'];
}
if (empty($_SESSION['cart'])) {
    echo "請先選購商品";
    exit;
}
?>
<h1 class="ct"><?= $_SESSION['login']; ?>的購物車</h1>
<table>
    <tr>
        <td>編號</td>
        <td>商品名稱</td>
        <td>數量</td>
        <td>庫存量</td>
        <td>單價</td>
        <td>小計</td>
        <td>刪除</td>
    </tr>
    <?php
foreach($_SESSION['cart'] as $id=>$qt){
    $row=$Goods->find($id);
    ?>
    <tr>
        <td><?=$row['no'];?></td>
        <td><?=$row['name'];?></td>
        <td><?=$qt;?></td>
        <td><?=$row['stock'];?></td>
        <td><?=$row['price'];?></td>
        <td><?=$row['price']*$qt;?></td>
        <td><a href="api/del_cart.php?id=<?=$id;?>"><img src="img/0415.jpg"></a></td>
    </tr>
<?php } ?>
</table>
<a href="?"><img src="img/0411.jpg"></a>
<a href="?do=order"><img src="img/0412.jpg"></a>