<?php
include_once "../api/base.php";

$data = [
    q("SELECT * FROM `images` WHERE `class`='popular_image1'"),
    q("SELECT * FROM `images` WHERE `class`='popular_image2'"),
    q("SELECT * FROM `images` WHERE `class`='popular_image3'"),


];

$image = [];

foreach ($data as $item) {
    if (isset($item[0]['class'])) {
        $image[$item[0]['class']] = $item[0]['name'];
    }
}



echo json_encode($image);


?>