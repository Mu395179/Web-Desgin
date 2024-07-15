<?php
include_once "../api/base.php";

$data = q("SELECT * FROM `images` WHERE `class`='title'");


echo json_encode($data);


?>
