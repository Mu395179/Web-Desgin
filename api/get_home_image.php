<?php
include_once "base.php";

$data = [
    q("SELECT * FROM `images` WHERE `class`='image1'"),
    q("SELECT * FROM `images` WHERE `class`='image2'"),
    q("SELECT * FROM `images` WHERE `class`='image3'"),
    q("SELECT * FROM `images` WHERE `class`='image4'")

];

$image = [];

foreach ($data as $item) {
    if (isset($item[0]['class'])) {
        $image[$item[0]['class']] = $item[0]['name'];
    }
}


echo json_encode($image);


?>
