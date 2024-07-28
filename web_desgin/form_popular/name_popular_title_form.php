<?php

include_once "../api/base.php";

$data = $Title_popular->all();


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
    <div class="modal fade" id="titleModal" tabindex="-1" aria-labelledby="titleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="titleModalLabel">Admin Title</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form method="post">
                        <label class="form-label mt-2" for="name">title:</label><br>
                        <input class="form-control" type="text" name="title" id="title" value="<?= $data[0]['title']?>"><br>
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
            title: $("#title").val(),
        }
        $.post("../api_popular/edit_title.php", form, function (res) {
            if (res == 1) {
                alert('新增成功');
                window.location.href = "../backend/manage.php";

            } else {
                alert('新增失敗')
                console.log(res);

            }
        })
    }
    const titleModal = new bootstrap.Modal('#titleModal')
    const modal = document.querySelector("#titleModal")
    modal.addEventListener('hidden.bs.modal', event => {

        titleModal.dispose()
        $("#modal").html("")

    })

    //console.log(titleModal)
    titleModal.show()
</script>

</html>