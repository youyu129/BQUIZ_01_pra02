<?php
include_once "db.php";

$table=$_GET['table'];
$$db=ucfirst($table);

$row=$$db->find($_POST['id']);
if(!empty($_FILES['img']['tmp_name'])){
    move_uploaded_file($_FILES['img']['tmp_name'],"../upload/".$_FILES['img']['name']);
    $row['img']=$_FILES['img']['name'];
}

$$db->save($row);
to("../admin.php?do=title");
?>