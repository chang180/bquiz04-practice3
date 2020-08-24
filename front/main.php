<?php
$type = $_GET['type']??0;
$tt = $Type->find($type);
if ($type == 0) {
    $nav = "全部商品";
    $goods = $Goods->all(['sh' => 1]);
} else {
    if ($tt['parent'] == 0) {
        $nav = $tt['text'];
        $goods = $Goods->all(['sh' => 1, 'big' => $type]);
    } else {
        $big = $Type->find($tt['parent']);
        $nav = $big['text'] . ">" . $tt['text'];
        $goods = $Goods->all(['sh' => 1, 'mid' => $type]);
    }
}

?>
<h1><?= $nav; ?></h1>
<?php
foreach ($goods as $g) {
?>
    <div style="display:flex">
        <div><a href="?do=detail&nav=<?=$nav;?>&id=<?=$g['id'];?>"><img src="img/<?= $g['img']; ?>" style="width:100px;height:80px;"></a> </div>
        <div>
            <div><?= $g['name']; ?></div>
            <div>編號：<?= $g['no']; ?><a href="?do=buycart&qt=1&id=<?= $g['id']; ?>"><img src="img/0402.jpg"></a></div>
            <div>規格：<?= $g['spec']; ?></div>
            <div>簡介：<?= $g['intro']; ?></div>
        </div>
    </div>
    <hr>
<?php
}
?>