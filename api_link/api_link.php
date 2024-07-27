<?php
include_once "../api/base.php";

// dd($_POST);

if (!empty($_POST['id'])) {
    if ($_POST['action'] == '編輯') {
        $data = [
            'id' => $_POST['id'],
            'name' => $_POST['name'],
            'source' => $_POST['source'],
            'type' => $_POST['type'],
        ];
        $Links->save($data);
        to('../backend/manage.php');
    } elseif ($_POST['action'] == '刪除') {
        $Links->del($_POST['id']);
        to('../backend/manage.php');
    }
} else {
    $data = [
        'name' => $_POST['name'],
        'source' => $_POST['source'],
        'type' => $_POST['type'],
    ];
    $Links->save($data);
    to('../backend/manage.php');
}


?>