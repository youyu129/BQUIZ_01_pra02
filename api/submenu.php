<?php
include_once "db.php";
// dd($_POST);
foreach($_POST['text'] as $text){
    foreach($_POST['text'] as $href){
    $row['text']=$text;
    $row['href']=$href;
    $row['main_id']=$_POST['main_id'];
}
}
$Menu->save($row);
// to("../admin.php?do=menu");
?>