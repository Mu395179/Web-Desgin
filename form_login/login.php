<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <title>Document</title>
</head>

<body>
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
    </fieldset>
    <script>
        function login() {

            $.post('./check_acc.php', {
                acc: $("#acc").val()
            }, (chkAcc) => {
                console.log(chkAcc);
                if (parseInt(chkAcc) == 1) {
                    $.post("./check_pass.php", {
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
    </script>
</body>

</html>