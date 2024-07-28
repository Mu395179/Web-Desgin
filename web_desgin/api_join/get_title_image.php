<?php
include_once "../api/base.php";

$data = q("SELECT * FROM `images` WHERE `class`='join'");


echo json_encode($data);


?>
