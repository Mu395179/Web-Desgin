<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <title>Document</title>
</head>

<body>
    <div class="modal fade" id="logoModal" tabindex="-1" aria-labelledby="logoModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="logoModalLabel">Admin Logo</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form method="post">
                        <label class="form-label mt-2" for="name">name:</label><br>
                        <input class="form-control" type="text" name="name" id="username"><br>

                        <input type="submit" class="btn btn-primary" value="送出" onclick="send()">
                        <input type="reset" value="重置" class='btn btn-warning'>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script>
        const logoModal = new bootstrap.Modal('#logoModal')
        const modal = document.querySelector("#logoModal")
        modal.addEventListener('hidden.bs.modal', event => {

            logoModal.dispose()
            $("#modal").html("")

        })

        //console.log(logoModal)
        logoModal.show()
    </script>

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