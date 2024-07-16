
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
    <label class="form-label mt-2" for="subtitle">subtitle:</label><br>
    <textarea class="form-control " type="text" name="subtitle" id="subtitle" rows="2" cols="100"></textarea><br>
    <label class="form-label mt-2" for="title">title:</label><br>
    <textarea class="form-control " type="text" name="title" id="title" rows="2" cols="100"></textarea><br>
    <label class="form-label mt-2" for="description">description:</label><br>
    <textarea class="form-control " type="text" name="description" id="description" rows="2" cols="100"></textarea><br>
    <input type="button" value="送出" onclick="send()">
    <input type="reset" value="重置" class='btn btn-warning'>
    </form>
</body>

<script>
     function send() {
        let form = {
            subtitle: $("#subtitle").val(),
            title: $("#title").val(),
            description: $("#description").val(),
            
        }
        $.post("../api_about/edit_data.php", form, function(res) {
            if (res == 1) {
                alert('新增成功');
                window.location.href = "../backend/manage.html";
               
            } else {
                alert('新增失敗')
                console.log(res);
                console.log(form);
            }
        })
    }
    // jquery end
</script>
</html>