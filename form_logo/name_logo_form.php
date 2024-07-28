<?php

include_once "../api/base.php";

$data = $Logo->all();


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
    <div class="modal fade" id="logoModal" tabindex="-1" aria-labelledby="logoModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="logoModalLabel">Admin Logo</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form method="post">
                        <label class="form-label mt-2" for="name">name:</label><br>
                        <input class="form-control" type="text" name="name" id="username" value="<?=$data[0]['name']?>"><br>

                        <input type="submit" class="btn btn-primary" value="送出" onclick="send()">
                      
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script>
        // const logoModal = new bootstrap.Modal('#logoModal')
        // const modal = document.querySelector("#logoModal")
        // modal.addEventListener('hidden.bs.modal', event => {

        //     logoModal.dispose()
        //     $("#modal").html("")

        // })

        // //console.log(logoModal)
        // logoModal.show()
        function showModal() {
            // 獲取模態框元素
            const modalElement = document.querySelector("#logoModal");

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

</body>

<script>
    function send() {
        let form = {
            name: $("#username").val(),

        }
        $.post("../api_logo/edit_logo_name.php", form, function (res) {
            if (res == 1) {
                alert('新增成功');
                window.location.href = "../backend/manage.php";

            } else {
                alert('新增失敗')
                console.log(res);

            }
        })
    }
    // jquery end
</script>

</html>