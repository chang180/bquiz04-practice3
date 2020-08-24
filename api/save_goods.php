<?php
include_once "../base.php";
move_uploaded_file($_FILES['img']['tmp_name'],"../img/".$_FILES['img']['name']);
$_POST['img']=$_FILES['img']['name'];

$Goods->save($_POST);
to("../admin.php?do=th");