<?php
include_once "base.php";

$datas = q("SELECT * FROM `titles`");
foreach($datas as $key => $value){
    $Title->del($value['id']);
}


echo $Title->save($_POST);



?>

