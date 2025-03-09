<h2 class="cent">進站總人數管理</h2>
<hr>
<form action="./api/update_one.php" method="post">
<table style="width:50%;margin:auto;">
    <tr>
        <td class="yel">進站總人數：</td>
        <td>
            <input type="text" name="total" id="total" value="<?=$Total->find(1)['total'];?>">
        </td>
    </tr>
    
</table>
<div class="cent">
    <input type="submit" value="修改確定">
    <input type="hidden" name="table" value="<?=$do;?>">
</div>
</form>