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
print_r($_SESSION['cart']);
?>
<h1 class="ct"><?= $_SESSION['login']; ?>的購物車</h1>