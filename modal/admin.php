<h3 class="cent">新增管理者帳號</h3>
<hr>
<form action="api/insert.php" method="post" enctype="multipart/form-data">
    <table style="width:90%">
        <tr>
            <td width="20%">帳號：</td>
            <td>
                <input type="text" name="acc" id="acc">
            </td>
        </tr>
        <tr>
            <td width="20%">密碼：</td>
            <td>
                <input type="password" name="pw" id="pw">
            </td>
        </tr>
        <tr>
            <td width="20%">確認密碼：</td>
            <td>
                <input type="password" name="pw2" id="pw2">
            </td>
        </tr>
    </table>
    <div>
        <input type="hidden" name="table" value="<?=$_GET['table'];?>">
        <input type="submit" value="新增">
        <input type="reset" value="重置">
    </div>
</form>