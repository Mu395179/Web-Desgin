<?php

include_once "../api/base.php";

$data = $User->all();


?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <title>Document</title>
</head>

<body>
<div class="modal fade" id="userModal" tabindex="-1" aria-labelledby="userModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="userModalLabel">Admin User</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
            <form method="post">
        <label class="form-label mt-2" for="name">name:</label><br>
        <input class="form-control" type="text" name="name" id="username"  value="<?=$data[0]['name']?>"><br>
       
        <input type="button" value="送出" onclick="send()" class='btn btn-primary'>

    </form>
            </div>
        </div>
    </div>
</div>
   
</body>

<script>
    function send() {
        let form = {
            name: $("#username").val(),
          
        }
        $.post("../api_explore/edit_explore_image_name.php", form, function (res) {
            if (res == 1) {
                alert('新增成功');
                window.location.href = "../backend/manage.php";

            } else {
                alert('新增失敗')
                console.log(res);

            }
        })
    }
    // const userModal = new bootstrap.Modal('#userModal')
    //     const modal = document.querySelector("#userModal")
    //     modal.addEventListener('hidden.bs.modal', event => {

    //         userModal.dispose()
    //         $("#modal").html("")

    //     })
       
    //     //console.log(userModal)
    //     userModal.show()
    function showModal() {
            // 獲取模態框元素
            const modalElement = document.querySelector("#userModal");

            // 創建新的模態框實例
            const addModal = new bootstrap.Modal(modalElement);

            // 添加模態框關閉事件監聽器
            modalElement.addEventListener('hidden.bs.modal', event => {
                // 清空模態框內容
                $("#modal").html("");
            }, { once: true }); // 使用 { once: true } 確保事件監聽器僅運行一次

            // 顯示模態框
            addModal.show();
        }

        // 調用 showModal 函數顯示模態框
        showModal();
</script>

</html>