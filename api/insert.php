<?php
include_once "db.php";

if(!empty($_FILES['img']['tmp_name'])){
    move_uploaded_file($_FILES['img']['tmp_name'],"../upload/".$_FILES['img']['name']);
    $_POST['img']=$_FILES['img']['name'];
}
$_POST['text'];
$_POST['sh']=1;
$Title->save($_POST);
to("../admin.php?do=title");
?>