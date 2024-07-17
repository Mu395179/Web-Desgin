<?php
include_once "../api/base.php";

$datas = q("SELECT * FROM `Title_popular`");
foreach($datas as $key => $value){
    $Title_popular->del($value['id']);
}


echo $Title_popular->save($_POST);



?>

