

$(document).ready(function () {
    // 這個函數會在DOM完全載入後執行

    // 綁定按鈕的點擊事件
    const explore_img = $('.explore__image');
    const explore__data = $('.explore__data');
    let gettitleimage = '../api_explore/get_title_image.php';

    $.ajax({
        type: "get",
        url: gettitleimage,
        data: "image",
        dataType: "json",
        success: function (image) {
            // 請求成功時執行的操作
            console.log('Success:', image);
            let result = '';
            $.each(image, function (key, value) {
                console.log('value', value);
                result += `
                <img class="explore__img" src="../api/images/${value.name}" alt="explore image">
                    <div class="explore__shadow"></div>
                `;
            });
            console.log('result', result);
            explore_img.html(result); // 這裡應該使用 .html() 函數
        },
        error: function (error) {
            // 請求失敗時執行的操作
            console.error('Error:', error);
            console.log('value', value);
        }
    });


    // 防止默認的鏈接行為
    // 這行應該放在一個事件處理器內，這裡暫時不需要
    let url = '../api_explore/get_data.php';

    // 使用$.ajax進行GET請求
    $.ajax({
        type: "get",
        url: url,
        data: "data",
        dataType: "json",
        success: function (data) {
            // 請求成功時執行的操作
            console.log('Success:', data);
            // 這裡應該是 data 而不是 res
            let result = '';
            $.each(data, function (key, value) {
                console.log('value', value);
                result += `
                       <div class="explore__data">
        <h2 class="section__title">
                             ${value.title}
                        </h2>
                        <p class="explore__description">
                             ${value.description}
                        </p>
                         <a  href="javascript:void(0);" class="button"
        onclick="$('#modal').load('../form_explore/image_form.php')">
        更換照片 </a>
                         <a  href="javascript:void(0);" class="button"
        onclick="$('#modal').load('../form_explore/text_form.php')">
        編輯標題 </a>

    </div>
                    `;
            });
            console.log('result', result);
            explore__data.html(result);

        },
        error: function (error) {
            // 請求失敗時執行的操作
            console.error('Error:', error);
        }
    });

    let getexploreimage = '../api_explore/get_home_image.php';

    $.ajax({
        type: "get",
        url: getexploreimage,
        data: "image",
        dataType: "json",
        success: function (image) {
            // 請求成功時執行的操作
            console.log('Success:', image);

            $('#user').attr('src', `../api/images/${image.user}`);
           

        },
        error: function (error) {
            // 請求失敗時執行的操作
            console.error('Error:', error);
            console.log('value', value);
        }
    });

    let getusername = '../api_explore/get_user_name.php';


        $.ajax({
            type: "GET",
            url: getusername,
            dataType: "json",
            success: function(imagename) {
                // 请求成功时执行的操作
                console.log('Success:', imagename);

                $('#user_name').text(imagename.name);
                
            },
            error: function(error) {
                // 请求失败时执行的操作
                console.error('Error:', error);
                console.error('imagename:', imagename);
            }
        });





});