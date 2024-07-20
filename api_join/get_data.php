<?php
include_once "../api/base.php";

$data = q("SELECT * FROM `title_join`");


// dd($data);
echo json_encode($data);


?>
