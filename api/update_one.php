<?php
include_once "db.php";

$table=$_POST['table'];
$$db=ucfirst($table);

$$db->save(['text'=>$_POST['text']]);
// to("../admin.php?do=title");
?>