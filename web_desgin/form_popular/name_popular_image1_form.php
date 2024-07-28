<?php

include_once "../api/base.php";


$image = q("SELECT * FROM `name_popular_image` WHERE `type`='image1'");



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
<div class="modal fade" id="nameModal" tabindex="-1" aria-labelledby="nameModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="nameModalLabel">Admin Image Name</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
            <form method="post">
        <input type="text" name="type" id="home_type" value="image1"><br>
        <label class="form-label mt-2" for="name">name:</label><br>
        <input class="form-control" type="text" name="name" id="home_name" value="<?= $image[0]['name'] ?>"><br>
        <label class="form-label mt-2" for="text">text:</label><br>
        <input class="form-control" type="text" name="text" id="home_text" value="<?= $image[0]['text'] ?>"><br>

        <input type="button" value="送出" onclick="send()" class="btn btn-primary">
    </form>
            </div>
        </div>
    </div>
</div>
   
</body>

<script>
    function send() {
        let form = {
            name: $("#home_name").val(),
            text: $("#home_text").val(),
            type: $("#home_type").val(),
        }
        $.post("../api_popular/edit_home_image_name.php", form, function (res) {
            if (res == 1) {
                alert('新增成功');
                window.location.href = "../backend/manage.php";

            } else {
                alert('新增失敗')
                console.log(res);

            }
        })
    }
    const nameModal = new bootstrap.Modal('#nameModal')
        const modal = document.querySelector("#nameModal")
        modal.addEventListener('hidden.bs.modal', event => {

            nameModal.dispose()
            $("#modal").html("")

        })
       
        //console.log(nameModal)
        nameModal.show()
</script>

</html>