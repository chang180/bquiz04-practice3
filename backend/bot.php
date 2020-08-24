<?php
if(!empty($_POST)) {
    $bottom['bottom']=$_POST['bottom'];
    $Bottom->save($bottom);
    to("admin.php?do=bot");
}
?>
<form action="?do=bot" method="post">
<h1 class="ct">編輯頁尾版權區</h1>
頁尾版權內容：<input type="text" name="bottom" value="<?=$bottom['bottom'];?>"><br>
<button>確認</button><button type="reset">重置</button>
</form>