<?php
include_once "../api/base.php";

$data = q("SELECT * FROM `images` WHERE `class`='about'");


// dd($data);

echo json_encode($data);


?>
