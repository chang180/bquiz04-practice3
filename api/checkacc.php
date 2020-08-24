<?php
include_once "../base.php";
$chk=$Member->count(['acc'=>$_POST['acc']]);
if($chk==0) echo "帳號可使用";
else echo "帳號重複";