<?php
include_once "../api/base.php";

$link = [
    q("SELECT * FROM `links`"),

]


    // dd($data);

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

</head>

<body>
    <div class="container">
        <h1>Link 編輯</h1>
        <div class="row">
            <div class="col-1 title">id</div>
            <div class="col-1 title">name</div>
            <div class="col-7 title">source</div>
            <div class="col-1 title">type</div>
            <div class="col-2 title">Method</div>
        </div>

        <?php
        $link = [
            ['id' => 1, 'name' => 'title', 'source' => 'https://x.com/baloolax/status/1810744203875635342', 'type' => 'image'],
            ['id' => 2, 'name' => 'google', 'source' => 'https://www.google.com/', 'type' => 'image'],
            ['id' => 3, 'name' => 'facebook', 'source' => 'https://www.google.com/', 'type' => 'image']
        ];

        foreach ($link as $key => $value) {
            ?>
            <div class="row">
                <form action="../api_link/edit_link.php" method="get" class="d-flex">
                    <input class="col-1 item" type="text" name="id" value="<?php echo $value['id']; ?>">
                    <input class="col-1 item" type="text" name="name" value="<?php echo $value['name']; ?>">
                    <input class="col-7 item" type="text" name="source" value="<?php echo $value['source']; ?>">
                    <input class="col-1 item" type="text" name="type" value="<?php echo $value['type']; ?>">
                    <div class="col-2 item">
                        <button type="submit">submit</button>

                    </div>
                </form>
            </div>
        <?php } ?>
    </div>
</body>

</html>