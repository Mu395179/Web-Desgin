<?php
include_once "../api/base.php";

$data = q("SELECT * FROM `text_about`");

echo json_encode($data);


?>
