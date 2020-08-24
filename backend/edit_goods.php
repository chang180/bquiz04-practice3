<form action="api/save_goods.php" method="post" enctype="multipart/form-data">
    <h1 class="ct">修改商品</h1>
    <?php $row=$Goods->find($_GET['id']); ?>
    <input type="hidden" name="id" value="<?=$row['id'];?>">
    <table>
        <tr>
            <td>所屬大分類</td>
            <td><select name="big" id="big">
                    <?php
                    $bigs = $Type->all(['parent' => 0]);
                    foreach ($bigs as $b) {
                        echo "<option value='" . $b['id'] . "'>" . $b['text'] . "</option>";
                    }
                    ?>
                </select></td>
        </tr>
        <tr>
            <td>所屬中分類</td>
            <td><select name="mid" id="mid"></select></td>
        </tr>
        <tr>
            <td>商品編號</td>
            <td><?=$row['no'];?></td>
        </tr>
        <tr>
            <td>商品名稱</td>
            <td><input type="text" name="name" value="<?=$row['name'];?>"></td>
        </tr>
        <tr>
            <td>商品價格</td>
            <td><input type="text" name="price" value="<?=$row['price'];?>"></td>
        </tr>
        <tr>
            <td>規格</td>
            <td><input type="text" name="spec" value="<?=$row['spec'];?>"></td>
        </tr>
        <tr>
            <td>庫存量</td>
            <td><input type="text" name="stock" value="<?=$row['stock'];?>"></td>
        </tr>
        <tr>
            <td>商品圖片</td>
            <td><input type="file" name="img"></td>
        </tr>
        <tr>
            <td>商品介紹</td>
            <td><textarea name="intro" style="width:500px;height:150px;"><?=$row['intro'];?></textarea></td>
        </tr>
    </table>
    <div class="ct">
        <button>新增</button>
        <button type="reset">重置</button>
        <button type="button" onclick="history.go(-1)">返回</button>
    </div>
</form>
<script>
$.post("api/getmid.php", {"id":$("#big").val()}, function(res) {
            $("#mid").html(res);
        })

    $("#big").on("change", function() {
        $.post("api/getmid.php", {"id":$("#big").val()}, function(res) {
            $("#mid").html(res);
        })
    })
</script>