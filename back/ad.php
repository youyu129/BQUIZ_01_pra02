<p class="t cent botli">動態文字廣告管理</p>
<form method="post" action="./api/edit.php">
    <table width="100%" class="cent">
        <tbody>
            <tr class="yel">
                <td width="80%">動態文字廣告</td>
                <td width="10%">顯示</td>
                <td width="10%">刪除</td>
                <td></td>
            </tr>
            <?php
            $rows=$Ad->all();
            foreach ($rows as $row):
            ?>
            <tr>
                <td>
                    <input type="text" name="text[]" id="text" value="<?=$row['text'];?>" style="width:90%">
                </td>
                <td>
                    <input type="checkbox" name="sh[]" id="sh" value="<?=$row['id'];?>"
                        <?=($row['sh']==1)?'checked':"";?>>
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
                        value="新增動態文字廣告">
                </td>
                <td class="cent"><input type="submit" value="修改確定"><input type="reset" value="重置">
                </td>
            </tr>
        </tbody>
    </table>

</form>
</div>