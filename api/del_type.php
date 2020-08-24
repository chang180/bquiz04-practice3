<?php
include_once "../base.php";
$Type->del($_GET['id']);
to("../admin.php?do=th");