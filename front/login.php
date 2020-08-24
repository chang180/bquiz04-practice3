<h1>第一次購物</h1>
<a href="?do=reg"><img src="img/0413.jpg"></a><br>
<hr>
<h1>會員登入</h1>
<form action="api/login.php" method="post">
<table>
    <tr>
        <td>帳號</td>
        <td><input type="text" name="acc"></td>
    </tr>
    <tr>
        <td>密碼</td>
        <td><input type="password" name="pw"></td>
    </tr>
    <tr>
        <td>驗證碼</td>
        <?php
$a=rand(10,99);
$b=rand(10,99);
$_SESSION['ans']=$a+$b;
        ?>
        <td><?=$a."+".$b."=";?><input type="number" name="ans"></td>
    </tr>
</table>
<div class="ct"><button>確認</button></div>
</form>