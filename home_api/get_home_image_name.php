<?php
include_once "base.php";

$data = [
    q("SELECT * FROM `name_home_image` WHERE `type`='image1'"),
    q("SELECT * FROM `name_home_image` WHERE `type`='image2'"),
    q("SELECT * FROM `name_home_image` WHERE `type`='image3'"),
    q("SELECT * FROM `name_home_image` WHERE `type`='image4'")

];

$imagename = [];

foreach ($data as $item) {
    if (isset($item[0]['type'])) {
        $imagename[$item[0]['type']] = $item[0]['name'];

    }
   
}


echo json_encode($imagename);


?>
