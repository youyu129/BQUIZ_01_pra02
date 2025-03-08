<p class="t cent botli">網站標題管理</p>
<form method="post" target="back" action="?do=tii">
    <table width="100%" class="cent">
        <tbody>
            <tr class="yel">
                <td width="45%">網站標題</td>
                <td width="23%">替代文字</td>
                <td width="7%">顯示</td>
                <td width="7%">刪除</td>
                <td></td>
            </tr>
            <?php
            $rows=$Title->all();
            foreach ($rows as $row):
            ?>
            <tr>
                <td><img src="./upload/<?=$row['img'];?>" style="width:300px;height:30px;"></td>
                <td>
                    <input type="text" name="text[]" id="text" value="<?=$row['text'];?>">
                </td>
                <td>
                    <input type="radio" name="sh" id="sh" value="<?=$row['id'];?>" <?=($row['sh']==1)?'checked':"";?>
                        </td>
                <td>
                    <input type="checkbox" name="del[]" id="del" value="<?=$row['id'];?>">
                </td>
                <td>
                    <button>更新圖片</button>
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
                        onclick="op(&#39;#cover&#39;,&#39;#cvr&#39;,&#39;./modal/<?=$do;?>.php&#39;)" value="新增網站標題圖片">
                </td>
                <td class="cent"><input type="submit" value="修改確定"><input type="reset" value="重置">
                </td>
            </tr>
        </tbody>
    </table>

</form>
</div>