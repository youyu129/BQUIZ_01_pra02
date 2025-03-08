<?php
include_once "../api/db.php";
?>

<h3 class="cent">編輯次選單</h3>
<hr>
<form action="api/submenu.php" method="post" enctype="multipart/form-data">
    <table style="width:90%;margin:auto">
        <thead>
            <tr>
                <td width="45%">次選單名稱：</td>
                <td width="45%">次選單連結網址：</td>
                <td width="10%">刪除</td>
            </tr>
        </thead>

        <tbody>
            <!-- <tr>
                <td>
                    <input type="text" name="text[]" id="text" style="width:90%">
                </td>
                <td>
                    <input type="text" name="href[]" id="href" style="width:90%">
                </td>
                <td>
                    <input type="checkbox" name="del[]" id="del" value="<?=$row['id'];?>">
                </td>
            </tr> -->
            <?php
            $main_id=$_GET['id'];
        $rows=$Menu->all(['main_id'=>$main_id]);
        foreach($rows as $row):
        ?>
            <tr>
                <td>
                    <input type="text" name="text[]" id="text" style="width:90%" value="<?=$row['text'];?>">
                </td>
                <td>
                    <input type="text" name="href[]" id="href" style="width:90%" value="<?=$row['href'];?>">
                </td>
                <td>
                    <input type="checkbox" name="del[]" id="del" value="<?=$row['id'];?>">
                    <input type="hidden" name="id[]" value="<?=$row['id'];?>">
                </td>
            </tr>
            <?php
            endforeach;
            ?>
            <tr id="more">
                <td colspan="3">
                    <input type="hidden" name="main_id" value="<?=$_GET['id'];?>">
                    <input type="submit" value="修改確定">
                    <input type="reset" value="重置">
                    <input type="button" onclick="more()" value="更多次選單">
                </td>
            </tr>
        </tbody>
    </table>
</form>