<?php include_once "../api/base.php";

$chk = $Admin->count($_POST);

if ($chk) {
    $_SESSION['user'] = $_POST['acc'];
}

echo $chk;