<?php
include_once "../api/base.php";

$datas = q("SELECT * FROM `title_join`");
foreach($datas as $key => $value){
    $Title_join->del($value['id']);
}


echo $Title_join->save($_POST);



?>

