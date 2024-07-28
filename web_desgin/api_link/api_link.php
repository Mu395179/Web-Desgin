<?php
include_once "../api/base.php";


if (isset($_POST['id'])) {
    $id = $_POST['id'];
}

// 準備數據數組
$data = [
    'name' => $_POST['name'],
    'source' => $_POST['source'],
    'type' => $_POST['type'],
];

// 根據action處理不同操作
switch ($_POST['action']) {
    case 'edit':
        if (isset($id)) {
            $data['id'] = $id;
            $Links->save($data);
        }
        break;

    case 'delete':
        if (isset($id)) {
            $Links->del($id);
        }
        break;

    default:
        $Links->save($data);
        break;
}
// if (isset($id)) {
//     $data['id'] = $id;
//     // dd($Links->save($data));
// }
function redirect($url)
{
    header("Location: $url");
    exit;
}

redirect('../backend/manage.php');
?>