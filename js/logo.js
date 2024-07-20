let getusername = '../api_logo/get_logo_name.php';


    $(document).ready(function() {
       
        $.ajax({
            type: "GET",
            url: getusername,
            dataType: "json",
            success: function(imagename) {
                // 请求成功时执行的操作
                console.log('Success:', imagename);

                $('#logo').text(imagename.name);
                
            },
            error: function(error) {
                // 请求失败时执行的操作
                console.error('Error:', error);
                console.error('imagename:', imagename);
            }
        });
    });