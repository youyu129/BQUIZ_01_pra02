<p class="t cent botli">校園映像資料管理</p>
<form method="post" action="./api/edit.php">
    <table width="100%" class="cent">
        <tbody>
            <tr class="yel">
                <td width="60%">校園映像資料圖片</td>
                <td width="10%">顯示</td>
                <td width="10%">刪除</td>
                <td width="20%"></td>
                <td></td>
            </tr>
            <?php
            $div=3;
            $all=$Image->count();
            $pages=ceil($all/$div);
            $now=$_GET['p']??1;
            $start=($now-1)*$div;

            $rows=$Image->all(" LIMIT $start,$div");
            foreach ($rows as $row):
            ?>
            <tr>
                <td><img src="./upload/<?=$row['img'];?>" style="width:100px;height:68px"></td>
                <td>
                    <input type="checkbox" name="sh[]" id="sh" value="<?=$row['id'];?>"
                        <?=($row['sh']==1)?'checked':"";?>>
                </td>
                <td>
                    <input type="checkbox" name="del[]" id="del" value="<?=$row['id'];?>">
                </td>
                <td>
                    <input type="hidden" name="table" value="<?=$_GET['do'];?>">
                    <input type="hidden" name="id[]" value="<?=$row['id'];?>">
                    <input type="button"
                        onclick="op('#cover','#cvr','./modal/update_<?=$do;?>.php?table=<?=$do;?>&id=<?=$row['id'];?>')"
                        value="更換圖片">
                </td>
            </tr>
            <?php
            endforeach;
            ?>
        </tbody>
    </table>

    <div class="cent">
        <?php
            if(($now-1)>0){
                echo "<a href='admin.php?do=image&p=".($now-1)."' style='text-decoration: none;'> < </a>";
            }
            for ($i=1; $i <= $pages ; $i++) { 
                $size=($i==$now)?'24px':'16px';
                echo "<a href='admin.php?do=image&p=".$i."' style='font-size:$size;text-decoration: none;'> $i </a>";
            }
            if(($now+1)<=$pages){
                echo "<a href='admin.php?do=image&p=".($now+1)."' style='text-decoration: none;'> > </a>";
            }
            ?>
    </div>
    <table style="margin-top:40px; width:70%;">
        <tbody>
            <tr>
                <td width="200px"><input type="button"
                        onclick="op(&#39;#cover&#39;,&#39;#cvr&#39;,&#39;./modal/<?=$do;?>.php?table=<?=$do;?>&#39;)"
                        value="新增校園映像圖片">
                </td>
                <td class="cent"><input type="submit" value="修改確定"><input type="reset" value="重置">
                </td>
            </tr>
        </tbody>
    </table>

</form>
</div>