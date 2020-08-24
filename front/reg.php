<h1 class="ct">會員註冊</h1>
<form action="api/reg.php" method="post">
<div class="ct">
<table>
    <tr>
        <td>姓名</td>
        <td><input type="text" name="name"></td>
    </tr>
    <tr>
        <td>帳號</td>
        <td><input type="text" name="acc" id="acc"><button type="button" id="check" onclick="checkacc()">檢測帳號</button><span id="result"></span></td>
    </tr>
    <tr>
        <td>密碼</td>
        <td><input type="text" name="pw"></td>
    </tr>
    <tr>
        <td>電話</td>
        <td><input type="text" name="tel"></td>
    </tr>
    <tr>
        <td>住址</td>
        <td><input type="text" name="addr"></td>
    </tr>
    <tr>
        <td>電子信箱</td>
        <td><input type="text" name="email"></td>
    </tr>
</table>
<div class="ct"><button>註冊</button><button type="reset">重置</button></div>
</div>
</form>
<script>
    function checkacc(){
        $.post("api/checkacc.php",{"acc":$("#acc").val()},function(res){
            $("#result").text(res);
        })
    }
</script>