<?php
include_once "../api/base.php";

$datas = q("SELECT * FROM `text_about`");
foreach($datas as $key => $value){
    $Text_about->del($value['id']);
}


echo $Text_about->save($_POST);



?>

