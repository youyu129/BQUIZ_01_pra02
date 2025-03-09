<?php
include_once "db.php";
// dd($_POST);

$table=$_POST['table'];
$db=ucfirst($table);
echo $db;
$row=$$db->find(1);
$row[$table]=$_POST[$table];

$$db->save($row);
to("../admin.php?do=$table");
?>