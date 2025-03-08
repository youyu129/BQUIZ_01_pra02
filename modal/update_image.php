<h3 class="cent">更換校園映像圖片</h3>
<hr>
<form action="api/insert.php" method="post" enctype="multipart/form-data">
    <table>
        <tr>
            <td>校園映像圖片：</td>
            <td>
                <input type="file" name="img" id="img">
            </td>
        </tr>

    </table>
    <div>
        <input type="hidden" name="id" value=<?=$_GET['id'];?>>
        <input type="hidden" name="table" value="<?=$_GET['table'];?>">
        <input type="submit" value="更換">
        <input type="reset" value="重置">
    </div>
</form>