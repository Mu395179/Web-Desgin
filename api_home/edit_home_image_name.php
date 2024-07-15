<?php
include_once "../api/base.php";

$type = $_POST['type'];

$datas = q("SELECT * FROM `name_home_image` WHERE `type`='$type'");

if(isset($datas)){
foreach($datas as $key => $value){

    $Name_home_image->del($value['id']);
}
}

echo $Name_home_image->save($_POST);



?>

