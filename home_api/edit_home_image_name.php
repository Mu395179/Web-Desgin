<?php
include_once "base.php";

$datas = q("SELECT * FROM `name_home_image` WHERE `type`='image1'");

if(isset($datas)){
foreach($datas as $key => $value){

    $Name_home_image->del($value['id']);
}
}

echo $Name_home_image->save($_POST);



?>

