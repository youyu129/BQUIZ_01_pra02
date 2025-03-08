<p class="t cent botli">選單管理</p>
<form method="post" action="./api/edit.php">
    <table width="100%" class="cent">
        <tbody>
            <tr class="yel">
                <td width="30%">主選單名稱</td>
                <td width="30%">選單連結網址</td>
                <td width="7%">次選單數</td>
                <td width="7%">顯示</td>
                <td width="7%">刪除</td>
                <td width="19%"></td>
            </tr>
            <?php
            $rows=$Menu->all(['main_id'=>0]);
            foreach ($rows as $row):
            ?>
            <tr>
                <td>
                    <input type="text" name="text[]" id="text" value="<?=$row['text'];?>">
                </td>
                <td>
                    <input type="text" name="href[]" id="href" value="<?=$row['href'];?>">
                </td>
                <td>
                    <?=$Menu->count(['main_id'=>$row['id']]);?>
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
                <td>
                    <input type="button"
                        onclick="op('#cover','#cvr','./modal/update_<?=$do;?>.php?table=<?=$do;?>&id=<?=$row['id'];?>')"
                        value="編輯次選單">
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
                        value="新增主選單">
                </td>
                <td class="cent"><input type="submit" value="修改確定"><input type="reset" value="重置">
                </td>
            </tr>
        </tbody>
    </table>

</form>
</div>