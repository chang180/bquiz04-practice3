<h1 class="ct">填寫資料</h1>
<form action="api/order.php" method="post" onsubmit="alert('訂購成功\n感謝您的選購')">
    <table>
        <tr>
            <td>登入帳號</td>
            <td><?= $_SESSION['login']; ?></td>
            <input type="hidden" name="acc" value="<?= $_SESSION['login']; ?>">
        </tr>
        <tr>
            <td>姓名</td>
            <td><input type="text" name="name"></td>
        </tr>
        <tr>
            <td>電子信箱</td>
            <td><input type="text" name="email"></td>
        </tr>
        <tr>
            <td>聯絡地址</td>
            <td><input type="text" name="addr"></td>
        </tr>
        <tr>
            <td>聯絡電話</td>
            <td><input type="text" name="tel"></td>
        </tr>
    </table>
    <hr>
    <table>
        <tr>
            <td>商品名稱</td>
            <td>編號</td>
            <td>數量</td>
            <td>單價</td>
            <td>小計</td>
        </tr>
        <?php
        $sum = 0;
        foreach ($_SESSION['cart'] as $id => $qt) {
            $row = $Goods->find($id);
        ?>
            <tr>
                <td><?= $row['name']; ?></td>
                <td><?= $row['no']; ?></td>
                <td><?= $qt; ?></td>
                <td><?= $row['price']; ?></td>
                <td><?= $row['price'] * $qt; ?></td>
            </tr>
        <?php
            $sum += $row['price'] * $qt;
        } ?>
    </table>
    <div class="ct">總價<?= $sum; ?></div>
    <input type="hidden" name="total" value="<?= $sum; ?>">
    <div class="ct"><button>確定送出</button><button type="button" onclick="history.go(-1)">返回修改訂單</button></div>
</form>