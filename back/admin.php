<p class="t cent botli">管理者帳號管理</p>
<form method="post" action="./api/edit.php">
    <table width="100%" class="cent">
        <tbody>
            <tr class="yel">
                <td width="40%">帳號</td>
                <td width="40%">密碼</td>
                <td width="20%">刪除</td>
                <td></td>
            </tr>
            <?php
            $rows=$Admin->all();
            foreach ($rows as $row):
            ?>
            <tr>
                <td>
                    <input type="text" name="acc[]" id="acc" value="<?=$row['acc'];?>" style="width:80%;">
                </td>
                <td>
                    <input type="password" name="pw[]" id="pw" value="<?=$row['pw'];?>" style="width:80%;">
                </td>
                <td>
                    <input type="checkbox" name="del[]" id="del" value="<?=$row['id'];?>">
                    <input type="hidden" name="id[]" value="<?=$row['id'];?>">
                    <input type="hidden" name="table" value="<?=$do;?>">
                </td>
            </tr>
            <?php
            endforeach;
            ?>
        </tbody>
    </table>
    <table style="margin-top:40px; width:70%;">
        <tbody>
            <tr>
                <td width="200px"><input type="button"
                        onclick="op(&#39;#cover&#39;,&#39;#cvr&#39;,&#39;./modal/<?=$do;?>.php?table=<?=$do;?>&#39;)"
                        value="新增管理者帳號">
                </td>
                <td class="cent"><input type="submit" value="修改確定"><input type="reset" value="重置">
                </td>
            </tr>
        </tbody>
    </table>

</form>
</div>