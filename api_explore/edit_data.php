<?php
include_once "../api/base.php";

$datas = q("SELECT * FROM `title_explore`");
foreach($datas as $key => $value){
    $Title_explore->del($value['id']);
}


echo $Title_explore->save($_POST);

// dd($_POST);

?>

