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
            height: 50px;
            text-align: center;
            font-size: larger;
            /* border: 1px solid black; */
            /* display: inline-block; */
            margin: 0;

        }

        .item {
            height: 30px;
            text-align: start;
            font-size: large;


        }

        .name {
            width: 100px;

        }

        .source {
            width: 500px;

        }

        .type {
            width: 50px;

        }

        .Method {
            width: 100px;
            border: 0px;


        }
    </style>


</head>

<body>
    <div class="container">
        <h1>Link 編輯</h1>
        <div class="row">
            <div class="name title">name</div>
            <div class="source title">source</div>
            <div class="type title">type</div>
        </div>

        <?php foreach ($link as $value) { ?>
            <div class="row mb-2">
                <form method="post" class="d-flex needs-validation" novalidate>
                    <input hidden="hidden" type="text" name="id" id="id-<?= $value['id']; ?>" value="<?= $value['id']; ?>" required>
                    <input class="name item" type="text" name="name" id="name-<?= $value['id']; ?>" value="<?= $value['name']; ?>" required>
                    <input class="source item" type="text" name="source" id="source-<?= $value['id']; ?>" value="<?= $value['source']; ?>" required>
                    <input class="type item" type="text" name="type" id="type-<?= $value['id']; ?>" value="<?= $value['type']; ?>" required>

                    <input class="btn btn-success mx-2" type="button" value="編輯" onclick="send(<?= $value['id']; ?>)">
                    <input class="btn btn-danger mx-1" type="button" value="刪除" onclick="del(<?= $value['id']; ?>)">
                </form>
            </div>
        <?php } ?>
        <div class="row mt-5">
            <div class="name title">name</div>
            <div class="source title">source</div>
            <div class="type title">type</div>
        </div>
        <div class="row mt-2">
                <form method="post" class="d-flex needs-validation" novalidate>
                    <input class="name item" type="text" name="name" id="name-new" >
                    <input class="source item" type="text" name="source" id="source-new" >
                    <input class="type item" type="text" name="type" id="type-new" >

                    <input class="btn btn-primary mx-2" type="button" value="新增" onclick="save()">

                </form>
            </div>

        <div class="row">
            <a href="../backend/manage.php"><button class="btn btn-dark mt-5">返回管理頁</button></a>
        </div>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script>
        function send(id) {
            // 因為#id 是唯一，所以foreach的資料需要增加後墜，所以就把$value['id']都加在id後面
            // 這樣foreach 出來的屬性都是唯一值
            let form = {
                id: $("#id-" + id).val(),
                name: $("#name-" + id).val(),
                source: $("#source-" + id).val(),
                type: $("#type-" + id).val(),
            };
            $.post("../api_link/edit_link.php", form, function (res) {
                console.log('form', form);
                if (res == 1) {
                    alert('更新成功');
                    location.reload();
                } else {
                    alert('更新失敗');
                    console.log(res);
                }
            });
        }

        function del(id) {
            let form = {
                id: $("#id-" + id).val(),
            };
            $.post("../api_link/delete_link.php", form, function (res) {
                if (res == 1) {
                    alert('刪除成功');
                    location.reload();  // 刪除成功後重新加載頁面
                } else {
                    alert('刪除失敗');
                    console.log(res);
                }
            });
        }

        function save() {
            // 因為#id 是唯一，所以foreach的資料需要增加後墜，所以就把$value['id']都加在id後面
            // 這樣foreach 出來的屬性都是唯一值
            let form = {
                name: $("#name-new").val(),
                source: $("#source-new").val(),
                type: $("#type-new").val(),
            };
            $.post("../api_link/create_link.php", form, function (res) {
                console.log('form', form);
                if (res == 1) {
                    alert('新增成功');
                    location.reload();
                } else {
                    alert('新增失敗');
                    console.log(res);
                }
            });
        }
    </script>
</body>


</html>