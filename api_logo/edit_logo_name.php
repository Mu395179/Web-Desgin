<?php
include_once "../api/base.php";

// $type = $_POST['id'];
$datas = q("SELECT * FROM `logo`");

if (isset($datas)) {
    foreach ($datas as $key => $value) {

        $Logo->del($value['id']);
    }
}
// dd($datas);
echo $Logo->save($_POST);



?>