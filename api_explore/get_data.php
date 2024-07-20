<?php
include_once "../api/base.php";

$data = q("SELECT * FROM `title_explore`");

echo json_encode($data);
// dd($data);

?>
