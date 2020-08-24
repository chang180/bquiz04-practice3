<?php
include_once "../base.php";
$Admin->del($_GET['id']);
to("../admin.php?do=admin");