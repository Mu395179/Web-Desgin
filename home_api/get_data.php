<?php
include_once "../api/base.php";

$data = q("SELECT * FROM `titles`");

echo json_encode($data);


?>
