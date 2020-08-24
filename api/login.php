<?php
include_once "../base.php";
if ($_POST['ans'] != $_SESSION['ans']) to("../index.php?do=login");
$chk = $Member->count(['acc' => $_POST['acc'], 'pw' => $_POST['pw']]);
if ($chk == 0) to("../index.php?do=login");
else {
    $_SESSION['login'] = $_POST['acc'];
    to("../index.php");
}
