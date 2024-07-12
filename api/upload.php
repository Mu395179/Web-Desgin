<?php include_once "base.php";

if(!empty($_FILES)){
    dd($_FILES);
    if(!empty($_POST)){
        dd($_POST);
    }else{
        echo "上傳失敗"; 
        exit;
    }
    // 初始化日期
    $date = new DateTime();
     // 提取副檔名
     $fileExtension = pathinfo($_FILES['file']['name'], PATHINFO_EXTENSION);
     // 新檔名=當下年月日時分秒.副檔名
    $newFileName = $date->format('Y' . 'm' . 'd' . 'H' . 'i' . 's') . '.' . $fileExtension;
    if (move_uploaded_file($_FILES['file']['tmp_name'], "images/" . $newFileName)){
        $data = [
            'name' => $newFileName,
            'type' => $_FILES['file']['type'],
            'size' => $_FILES['file']['size'],
        ];
        $Images->save($data);

        $text = [
            'text' =>$_POST['description']
        ];
        $Title->save($text);
    }
}else{
    echo "上傳失敗";
}