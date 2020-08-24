<?php
include_once "../base.php";

$mids=$Type->all(['parent'=>$_POST['id']]);
foreach($mids as $m){
    echo "<option value='".$m['id']."'>".$m['text']."</option>";
}