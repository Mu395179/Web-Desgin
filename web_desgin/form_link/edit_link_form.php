<?php
include_once "../api/base.php";

$link =
    q("SELECT * FROM `links`")
;


// dd($link[0]);

?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Link 編輯</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ"
        crossorigin="anonymous"></script>

    <style>
        * {
            box-sizing: border-box;
        }

        .title {
            padding-bottom: 10px;
            text-align: center;
            font-size: large;

            /* border: 1px solid black; */
            /* display: inline-block; */
        }

        .item {
            height: 30px;
            text-align: start;
            font-size: large;


        }

        .name {
            width: 100px;
            margin-left: 10px;
            text-align: center;
        }

        .source {
            width: 500px;

        }

        .type {
            width: 55px;
            margin-left: 10px;
            text-align: center;

        }

        .Method {
            width: 100px;
            border: 0px;


        }

        input {
            border: 1px solid black;
            color: black;
            overflow: hidden;
        }
    </style>


</head>

<body>
    <div class="modal fade" id="listModal" tabindex="-1" aria-labelledby="listModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="listModalLabel">Admin List</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-2 title">name</div>
                        <div class="col-3 title" style="margin-left: 100px;">source</div>
                        <div class="col-4 title" style="margin-left: 55px;">type</div>

                    </div>

                    <?php foreach ($link as $value) { ?>
                        <div class="row mb-2">
                        <form method="post" action="../api_link/api_link.php" class="d-flex needs-validation">
    <input hidden="hidden" type="text" name="id" id="id-<?= $value['id']; ?>" value="<?= $value['id']; ?>" required>
    <input class="name item" type="text" name="name" id="name-<?= $value['id']; ?>" value="<?= $value['name']; ?>" required>
    <input class="source item" type="text" name="source" id="source-<?= $value['id']; ?>" value="<?= $value['source']; ?>" required>
    <input class="type item" type="text" name="type" id="type-<?= $value['id']; ?>" value="<?= $value['type']; ?>" required>
    <input class="btn btn-success mx-2" type="submit" name="action" value="edit">
    <input class="btn btn-danger mx-1" type="submit" name="action" value="delete">
</form>
                        </div>
                    <?php } ?>
                    <div class="row mt-5">
                        <div class="name title">name</div>
                        <div class="source title">source</div>
                        <div class="type title">type</div>
                    </div>
                    <div class="row mt-2">
                        <form method="post" class="d-flex needs-validation" action="../api_link/api_link.php">
                            <input class="name item" type="text" name="name" id="name-new">
                            <input class="source item" type="text" name="source" id="source-new">
                            <input class="type item" type="text" name="type" id="type-new">

                            <input class="btn btn-success mx-2" type="submit" name="action" value="create">

                        </form>
                    </div>

                    <div class="row">
                        <a href="../backend/manage.php"><button class="btn btn-dark mt-5">返回管理頁</button></a>
                    </div>
                </div>
            </div>
        </div>
    </div>



    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script>

        const listModal = new bootstrap.Modal('#listModal')
        const modal = document.querySelector("#listModal")
        modal.addEventListener('hidden.bs.modal', event => {

            listModal.dispose()
            $("#modal").html("")

        })

        //console.log(listModal)
        listModal.show()
    </script>
</body>


</html>