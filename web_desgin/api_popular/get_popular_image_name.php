<?php
include_once "../api/base.php";

$data = [
    q("SELECT * FROM `name_popular_image` WHERE `type`='image1'"),
    q("SELECT * FROM `name_popular_image` WHERE `type`='image2'"),
    q("SELECT * FROM `name_popular_image` WHERE `type`='image3'"),

];

// dd($data);

$imagename = [];


foreach ($data as $keys => $item) {

    $imagename[$keys]['name'] = $item[0]['name'];
    $imagename[$keys]['text'] = $item[0]['text'];




}
// dd($imagename);

echo json_encode($imagename);


?>