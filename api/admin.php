<?php
include_once "../base.php";
if ($_POST['ans'] != $_SESSION['ans']) {
    echo "<script>
    alert('對不起，您輸入的驗證碼有誤請您重新登入');
    location.href='../index.php?do=admin';
    </script>";
};
$chk = $Admin->count(['acc' => $_POST['acc'], 'pw' => $_POST['pw']]);
if ($chk == 0) to("../index.php?do=admin");
else {
    $_SESSION['admin'] = $_POST['acc'];
    to("../admin.php");
}
