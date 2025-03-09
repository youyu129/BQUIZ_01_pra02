<p class="t cent botli">頁尾版權資料管理</p>
<form method="post" action="./api/update_one.php">
    <table width="50%" class="cent" style="margin:auto;">
        <tbody>
            <tr>
                <td class="yel" width="50%">頁尾版權資料：</td>
                <?php
                $row=$Bottom->find(1);
                ?>
                <td>
                    <input type="text" name="bottom" value="<?=$row['bottom'];?>">
                    <input type="hidden" name="id" value="<?=$row['id'];?>">
                    <input type="hidden" name="table" value="<?=$do;?>">
                </td>
            </tr>

        </tbody>
    </table>
    <div class="cent">
        <input type="submit" value="修改確定">
        <input type="reset" value="重置">
    </div>
</form>
</div>