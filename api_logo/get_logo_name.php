<?php
include_once "../api/base.php";

$data =  q("SELECT * FROM `logo`");


$imagename = [];

foreach ($data as $item) {
    if (isset($item['name'])) {
        $imagename = $item;

    }
   
}
// dd($data);
// dd($imagename);
echo json_encode($imagename);


?>
