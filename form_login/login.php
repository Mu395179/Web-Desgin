<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <title>Document</title>
</head>

<body>

    <div class="modal fade" id="loginModal" tabindex="-1" aria-labelledby="loginModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="loginModalLabel">Modal title</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <legend>Admin Login</legend>
                    <table>
                        <tr>
                            <td>帳號</td>
                            <td><input type="text" name="username" id="acc" value="admin"></td>
                        </tr>
                        <tr>
                            <td>密碼</td>
                            <td><input type="password" name="password" id="pw" value="1234"></td>
                        </tr>
                        <tr>
                            <td>
                                <button onclick="login()">登入</button>
                                <button onclick="clearFields()">清除</button>
                            </td>

                        </tr>
                    </table>
                </div>
               
            </div>
        </div>
    </div>





    <script>
        function login() {

            $.post('../form_login/check_acc.php', {
                acc: $("#acc").val()
            }, (chkAcc) => {
                console.log(chkAcc);
                if (parseInt(chkAcc) == 1) {
                    $.post("../form_login/check_pass.php", {
                        acc: $("#acc").val(),
                        pw: $("#pw").val()
                    }, (chkPw) => {
                        if (parseInt(chkPw) == 1) {
                            location.href = '../backend/manage.php';
                        } else {
                            alert("密碼錯誤");
                        }
                    });
                } else {
                    alert("帳號錯誤");
                }
            });
        }

        function clearFields() {
            $("#acc").val('');
            $("#pw").val('');
        }


        const loginModal = new bootstrap.Modal('#loginModal')
        const modal = document.querySelector("#loginModal")
        modal.addEventListener('hidden.bs.modal', event => {

            loginModal.dispose()
            $("#modal").html("")

        })
        //console.log(loginModal)
        loginModal.show()
    </script>
</body>

</html>