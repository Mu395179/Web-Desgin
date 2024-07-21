<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <title>Document</title>
</head>

<body>
    <form method="post">
        <label class="form-label mt-2" for="name">name:</label><br>
        <input class="form-control" type="text" name="name" id="username"><br>
       
        <input type="button" value="送出" onclick="send()">
        <input type="reset" value="重置" class='btn btn-warning'>
    </form>
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