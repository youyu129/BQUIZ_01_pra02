<h3 class="cent">新增最新消息資料</h3>
<hr>
<form action="api/insert.php" method="post" enctype="multipart/form-data">
    <table style="width:90%">
        <tr>
            <td width="20%">最新消息資料：</td>
            <td>
                <textarea name="text" id="text" style="width:80%;height:100px;"></textarea>
            </td>
        </tr>
    </table>
    <div>
        <input type="hidden" name="table" value="<?=$_GET['table'];?>">
        <input type="submit" value="新增">
        <input type="reset" value="重置">
    </div>
</form>