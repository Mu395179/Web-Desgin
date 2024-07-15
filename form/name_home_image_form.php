
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <title>Document</title>
</head>
<body>
    <form  method="post">
    <label class="form-label mt-2" for="name">name:</label><br>
    <input class="form-control" type="text" name="name" id="home_name" ><br>
    <label class="form-label mt-2">type:</label><br>
    <input class="form-control" type="text" name="type" id="home_type" value="<?=$_GET['type'];?>"><br>
   
    <input type="button" value="送出" onclick="send()">
    <input type="reset" value="重置" class='btn btn-warning'>
    </form>
</body>

<script>
     function send() {
        let form = {
            name: $("#home_name").val(),
            type: $("#home_type").val(),
        }
        $.post("../api_home/edit_home_image_name.php", form, function(res) {
            if (res == 1) {
                alert('新增成功');
                window.location.href = "../backend/manage.html";
               
            } else {
                alert('新增失敗')
                console.log(res);
                
            }
        })
    }
    // jquery end
</script>
</html>