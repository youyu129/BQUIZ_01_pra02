<h3 class="cent">新增主選單</h3>
<hr>
<form action="api/insert.php" method="post" enctype="multipart/form-data">
    <table style="width:90%">
        <tr>
            <td width="20%">主選單名稱：</td>
            <td>
                <input type="text" name="text" id="text" style="width:90%">
            </td>
        </tr>
        <tr>
            <td width="20%">選單連結網址：</td>
            <td>
                <input type="text" name="href" id="href" style="width:90%">
            </td>
        </tr>
    </table>
    <div>
        <input type="hidden" name="table" value="<?=$_GET['table'];?>">
        <input type="submit" value="新增">
        <input type="reset" value="重置">
    </div>
</form>