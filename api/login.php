<?php
include_once "db.php";

$chk_acc=$Admin->count(['acc'=>$_POST['acc']]);
$chk_pw=$Admin->count(['pw'=>$_POST['pw']]);

if($chk_acc>0 && $chk_pw>0){
    $_SESSION['login']=$_POST['acc'];
    to("../admin.php");
}else{
    echo "<div>";
    echo "帳號或密碼輸入錯誤";
    echo "<button><a href='../index.php?do=login'>確定</a></button>";
    echo "</div>";
    // echo "<script>alert('帳號或密碼輸入錯誤')</script>";
    // to("../index.php?do=login");
}
?>


