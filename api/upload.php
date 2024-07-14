<?php include_once "base.php";



if (!empty($_FILES)) {
    if (!empty($_POST)) {

        // 初始化日期
        $date = new DateTime();
        // 提取副檔名
        $fileExtension = pathinfo($_FILES['file']['name'], PATHINFO_EXTENSION);
        // 新檔名=當下年月日時分秒.副檔名
        $newFileName = $date->format('Y' . 'm' . 'd' . 'H' . 'i' . 's') . '.' . $fileExtension;
        if (move_uploaded_file($_FILES['file']['tmp_name'], "images/" . $newFileName)) {

            $data = [
                'name' => $newFileName,
                'type' => $_FILES['file']['type'],
                'size' => $_FILES['file']['size'],
                'class' => $_POST['class'],
            ];
            $class = $_POST['class'];
            $old = q("SELECT * FROM `images` WHERE `class`='$class';");
            foreach ($old as $key => $value) {
                unlink('images/' . $value['name']);
                $Images->del($value['id']);

            }
            $Images->save($data);
            to('../backend/manage.html');
        }
    }
} else {
    echo "上傳失敗";
}