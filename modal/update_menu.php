<h3 class="cent">編輯次選單</h3>
<hr>
<form action="api/submenu.php" method="post" enctype="multipart/form-data">
    <table style="width:90%">
        <thead>
            <tr>
                <td width="45%">次選單名稱：</td>
                <td width="45%">次選單連結網址：</td>
                <td width="10%">刪除</td>
            </tr>
        </thead>
        <tbody id="tbody">
            <tr>
                <td>
                    <input type="text" name="text[]" id="text" style="width:90%">
                </td>
                <td>
                    <input type="text" name="href[]" id="href" style="width:90%">
                </td>
                <td>
                    <input type="checkbox" name="del[]" id="del" value="<?=$row['id'];?>">
                </td>
            </tr>
        </tbody>
    </table>
    <div>
        <input type="hidden" name="main_id" value="<?=$_GET['id'];?>">
        <input type="submit" value="確定修改">
        <input type="reset" value="重置">
        <input type="button" onclick="more()" value="更多次選單">
    </div>
</form>