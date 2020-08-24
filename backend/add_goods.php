<form action="api/save_goods.php" method="post" enctype="multipart/form-data">
    <h1 class="ct">新增商品</h1>
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
            <td>完成分類後自動分配
<?php
$no=rand(100000,999999);
?>
<input type="hidden" name="no" value="<?=$no;?>">
            </td>
        </tr>
        <tr>
            <td>商品名稱</td>
            <td><input type="text" name="name"></td>
        </tr>
        <tr>
            <td>商品價格</td>
            <td><input type="text" name="price"></td>
        </tr>
        <tr>
            <td>規格</td>
            <td><input type="text" name="spec"></td>
        </tr>
        <tr>
            <td>庫存量</td>
            <td><input type="text" name="stock"></td>
        </tr>
        <tr>
            <td>商品圖片</td>
            <td><input type="file" name="img"></td>
        </tr>
        <tr>
            <td>商品介紹</td>
            <td><textarea name="intro" style="width:500px;height:150px;"></textarea></td>
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