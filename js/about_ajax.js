

$(document).ready(function () {
    // 這個函數會在DOM完全載入後執行

    // 綁定按鈕的點擊事件
    const about__image = $('.about__image');
    const about__data = $('.about__data');
    let getaboutimage = '../api_about/get_image.php';

    $.ajax({
        type: "get",
        url: getaboutimage,
        data: "image",
        dataType: "json",
        success: function (image) {
            // 請求成功時執行的操作
            console.log('Success:', image);
            let result = '';
            $.each(image, function (key, value) {
                console.log('value', value);
                result += `
                    <img src="../api/images/${value.name}" alt="about image" class="about__bg">
                `;
            });
            console.log('result', result);
            about__image.html(result); // 這裡應該使用 .html() 函數
        },
        error: function (error) {
            // 請求失敗時執行的操作
            console.error('Error:', error);
            console.log('value', value);
        }
    });


    // 防止默認的鏈接行為
    // 這行應該放在一個事件處理器內，這裡暫時不需要
    let url = '../api_about/get_data.php';

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
                       <div class="about__data">
                    <h2 class="section__title">
                        ${value.subtitle}
                    </h2>

                    <p class="about__description">
                        ${value.title}
                    </p>
                    <p class="about__description">
                        ${value.description}
                    </p>
                </div>
          <a href="../form/image_form.php?class=about" class="button">
                        更換照片<i class="ri-arrow-right-line"></i>
                    </a>
          <a href="../form_about/text_form.php" class="button">
                        更換文字敘述<i class="ri-arrow-right-line"></i>
                    </a>

    </div>
                    `;
            });
            console.log('result', result);
            about__data.html(result);

        },
        error: function (error) {
            // 請求失敗時執行的操作
            console.error('Error:', error);
        }
    });

});