<?php
include_once "../api/base.php";

// $type = $_POST['id'];
$datas = q("SELECT * FROM `user`");

if (isset($datas)) {
    foreach ($datas as $key => $value) {

        $User->del($value['id']);
    }
}
// dd($datas);
echo $User->save($_POST);



?>