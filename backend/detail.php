<?php $row=$Ord->find($_GET['id']) ;?>
<h1>訂單編號<?=$row['no'];?>的詳細資料</h1>
<table>
        <tr>
            <td>會員帳號</td>
            <td><?=$row['acc'];?></td>
        </tr>
        <tr>
            <td>姓名</td>
            <td><?=$row['name'];?></td>
        </tr>
        <tr>
            <td>電子信箱</td>
            <td><?=$row['email'];?></td>
        </tr>
        <tr>
            <td>聯絡地址</td>
            <td><?=$row['addr'];?></td>
        </tr>
        <tr>
            <td>聯絡電話</td>
            <td><?=$row['tel'];?></td>
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
        foreach (unserialize($row['goods']) as $id => $qt) {
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
    <div class="ct"><button type="button" onclick="history.go(-1)">返回</button></div>