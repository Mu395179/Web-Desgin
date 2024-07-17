
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <title>Document</title>
</head>
<body>
    <form action="../api/upload.php" method="post" enctype="multipart/form-data" >

    <label class="form-label mt-2" for="name">上傳檔案:</label><br>
    <input type="text" name="class" value="<?=$_GET['class'];?>"><br>
    <input class="form-control " type="file" name="file">
    <input class="mt-5" type="submit" value="上傳">
</body>

</html>