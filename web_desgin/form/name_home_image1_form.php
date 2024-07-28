<?php

include_once "../api/base.php";


$image =q("SELECT * FROM `name_home_image` WHERE `type`='image1'");



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
    <div class="modal fade" id="imageModal" tabindex="-1" aria-labelledby="imageModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="imageModalLabel">Admin Image</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form method="post">
                        <input type="text" name="type" value="image1"  id="home_type"><br>
                        <label class="form-label mt-2" for="name">name:</label><br>
                        <input class="form-control" type="text" name="name" id="home_name" value="<?= $image[0]['name']?>"><br>
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
            name: $("#home_name").val(),
            type: $("#home_type").val(),
        }
        $.post("../api_home/edit_home_image_name.php", form, function (res) {
            if (res == 1) {
                alert('新增成功');
                window.location.href = "../backend/manage.php";

            } else {
                alert('新增失敗')
                console.log(res);

            }
        })
    }
    const imageModal = new bootstrap.Modal('#imageModal')
    const modal = document.querySelector("#imageModal")
    modal.addEventListener('hidden.bs.modal', event => {

        imageModal.dispose()
        $("#modal").html("")

    })

    //console.log(imageModal)
    imageModal.show()
</script>

</html>