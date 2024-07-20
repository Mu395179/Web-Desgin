<?php
include_once "../api/base.php";

$data = [
    q("SELECT * FROM `images` WHERE `class`='user'"),
   

];

$image = [];

foreach ($data as $item) {
    if (isset($item[0]['class'])) {
        $image[$item[0]['class']] = $item[0]['name'];
    }
}

// dd($image);
echo json_encode($image);


?>
