<?php
include_once "base.php";

$data = q("SELECT * FROM `titles`");

echo json_encode($data);


?>
