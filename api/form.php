
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="upload.php" method="post" enctype="multipart/form-data">
    <label class="form-label mt-2" for="name">上傳檔案:</label>
    <input class="form-control " type="file" name="file">
    <label class="form-label mt-2" for="description">描述:</label>
    <textarea class="form-control " type="text" name="description" rows="5" cols="100"></textarea>

    <input class="mt-5" type="submit" value="上傳">
    </form>
</body>
</html>