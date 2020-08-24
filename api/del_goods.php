<?php
include_once "../base.php";
$Goods->del($_GET['id']);
to("../admin.php?do=th");