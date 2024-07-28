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
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="loginModalLabel">Admin Login</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="row justify-content-center">
                        <div class="col-md-6">
                            <form>
                                <div class="mb-3">
                                    <label for="acc" class="form-label">帳號</label>
                                    <input type="text" class="form-control" name="username" id="acc" value="admin">
                                </div>
                                <div class="mb-3">
                                    <label for="pw" class="form-label">密碼</label>
                                    <input type="password" class="form-control" name="password" id="pw" value="1234">
                                </div>
                                <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                                    <button type="button" class="btn btn-primary" onclick="login()">登入</button>
                                    <button type="button" class="btn btn-secondary" onclick="clearFields()">清除</button>
                                </div>
                            </form>
                        </div>
                    </div>
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


        // const loginModal = new bootstrap.Modal('#loginModal')
        // const modal = document.querySelector("#loginModal")
        // modal.addEventListener('hidden.bs.modal', event => {

        //     loginModal.dispose()
        //     $("#modal").html("")

        // })
        // //console.log(loginModal)
        // loginModal.show()
        // edit啟用
      function showModal() {
            // 獲取模態框元素
            const modalElement = document.querySelector("#loginModal");

            // 創建新的模態框實例
            const addModal = new bootstrap.Modal(modalElement);

            // 添加模態框關閉事件監聽器
            modalElement.addEventListener('hidden.bs.modal', event => {
                // 清空模態框內容
                $("#modal").html("");
            }, { once: true }); // 使用 { once: true } 確保事件監聽器僅運行一次

            // 顯示模態框
            addModal.show();
        }

        // 調用 showModal 函數顯示模態框
        showModal();
    </script>
</body>

</html>