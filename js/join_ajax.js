

$(document).ready(function () {
    // 這個函數會在DOM完全載入後執行

    // 綁定按鈕的點擊事件
    const join_img = $('.join__image');
    const join__data = $('.join__data');
    let gettitleimage = '../api_join/get_title_image.php';

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
                    <img src="../api/images/${value.name}" alt="join image" class="join__img">
                    
                `;
            });
            console.log('result', result);
            join_img.html(result); // 這裡應該使用 .html() 函數
        },
        error: function (error) {
            // 請求失敗時執行的操作
            console.error('Error:', error);
            console.log('value', value);
        }
    });


    // 防止默認的鏈接行為
    // 這行應該放在一個事件處理器內，這裡暫時不需要
    let url = '../api_join/get_data.php';

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
                       <div class="join__data">
       <h2 class="secion__title">
                         ${value.title}
                    </h2>
                    <p class="join__description">
                    ${value.description}
                    </p>
                     <a href="https://github.com/Mu395179" target="_blank" class="popular-button" style="margin-bottom: 20px; margin-right: 10px;">
                        Go to ${value.title}<i class="ri-arrow-right-line"></i>
                    </a>
                   <div style="margin-top: 30px">
                  
                    <a  href="javascript:void(0);" class="button"
        onclick="$('#modal').load('../form_join/image_form.php')">
        更換照片 </a>
                  
                     <a  href="javascript:void(0);" class="button"
        onclick="$('#modal').load('../form_join/text_form.php')">
        編輯文字</a>
                     </div>

    </div>
                    `;
            });
            console.log('result', result);
            join__data.html(result);

        },
        error: function (error) {
            // 請求失敗時執行的操作
            console.error('Error:', error);
        }
    });

   




});