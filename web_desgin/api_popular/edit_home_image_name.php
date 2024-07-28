<?php
include_once "../api/base.php";

$type = $_POST['type'];
$datas = q("SELECT * FROM `name_popular_image` WHERE `type`='$type'");

if (isset($datas)) {
    foreach ($datas as $key => $value) {

        $Name_popular_image->del($value['id']);
    }
}

echo $Name_popular_image->save($_POST);



?>