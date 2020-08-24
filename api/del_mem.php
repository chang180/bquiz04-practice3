<?php
include_once "../base.php";
$Member->del($_GET['id']);
to("../admin.php?do=mem");