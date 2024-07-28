<?php
include_once "../api/base.php";

$data = [
    q("SELECT * FROM `links` WHERE `type`='line3'"),

];

// dd($data);
echo json_encode($data);
?>