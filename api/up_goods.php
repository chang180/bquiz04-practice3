<?php
include_once "../base.php";
$row=$Goods->find($_GET['id']);
$row['sh']=1;
$Goods->save($row);
to("../admin.php?do=th");