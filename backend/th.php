<h1 class="ct">商品分類</h1>
<div class="ct"><form action="api/add_type.php" method="post">新增大分類<input type="text" name="text"><button>新增</button></form></div>
<div class="ct"><form action="api/add_type.php" method="post">新增中分類
<select name="parent">
<?php
$bigs=$Type->all(['parent'=>0]);
foreach($bigs as $b){
    echo "<option value='".$b['id']."'>".$b['text']."</option>";
}
?>
</select>
<input type="text" name="text"><button>新增</button></form></div>
<?php
foreach($bigs as $b){
    ?>
    大分類：<?=$b['text'];?><a href="?do=edit_type&id=<?=$b['id'];?>"><button>修改</button></a><a href="api/del_type.php?&id=<?=$b['id'];?>"><button>刪除</button></a><br>
    <?php
    $mids=$Type->all(['parent'=>$b['id']]);
    foreach($mids as $m){
        ?>
    中分類：<?=$m['text'];?><a href="?do=edit_type&id=<?=$m['id'];?>"><button>修改</button></a><a href="api/del_type.php?&id=<?=$m['id'];?>"><button>刪除</button></a><br>

        <?php
    }
    echo "<hr>";
}
?>
<h1 class="ct">商品管理</h1>
<div class="ct"><a href="?do=add_goods"><button>新增商品</button></a></div>
<table>
    <tr>
        <td>編號</td>
        <td>商品名稱</td>
        <td>庫存量</td>
        <td>狀態</td>
        <td>操作</td>
    </tr>
<?php
$rows=$Goods->all();
foreach($rows as $row){
?>
    <tr>
        <td><?=$row['no'];?></td>
        <td><?=$row['name'];?></td>
        <td><?=$row['stock'];?></td>
        <td><?=($row['sh']==1)?"販售中":"已下架";?></td>
        <td>
<a href="?do=edit_goods&id=<?=$row['id'];?>"><button>修改</button></a>
<a href="api/del_goods.php?id=<?=$row['id'];?>"><button>刪除</button></a>
<a href="api/up_goods.php?id=<?=$row['id'];?>"><button>上架</button></a>
<a href="api/dn_goods.php?id=<?=$row['id'];?>"><button>下架</button></a>
        </td>
    </tr>
<?php }?>
</table>

