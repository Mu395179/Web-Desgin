

$(document).ready(function () {
    // 這個函數會在DOM完全載入後執行

    // 綁定按鈕的點擊事件
    const home_img = $('.home_img');
    const home__data = $('.home__data');
    let gettitleimage = '../api/get_title_image.php';

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
                    <img src="../api/images/${value.name}" alt="home image" class="home__bg">
                `;
            });
            console.log('result', result);
            home_img.html(result); // 這裡應該使用 .html() 函數
        },
        error: function (error) {
            // 請求失敗時執行的操作
            console.error('Error:', error);
            console.log('value', value);
        }
    });


    // 防止默認的鏈接行為
    // 這行應該放在一個事件處理器內，這裡暫時不需要
    let url = '../api/get_data.php';

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
                       <div class="home__data">
        <h3 class="home__subtitle">
            ${value.subtitle}
        </h3>
        <h1 class="home__title">
            ${value.title}
        </h1>
        <p class="home__description">
             ${value.description}
        </p>
          <a href="../form/image_form.php?class=title" class="button">
                        更換照片<i class="ri-arrow-right-line"></i>
                    </a>
          <a href="../form/text_form.php" class="button">
                        更換文字敘述<i class="ri-arrow-right-line"></i>
                    </a>

    </div>
                    `;
            });
            console.log('result', result);
            home__data.html(result);

        },
        error: function (error) {
            // 請求失敗時執行的操作
            console.error('Error:', error);
        }
    });

    let gethomeimage = '../api/get_home_image.php';

    $.ajax({
        type: "get",
        url: gethomeimage,
        data: "image",
        dataType: "json",
        success: function (image) {
            // 請求成功時執行的操作
            console.log('Success:', image);

            $('#home_image1').attr('src', `../api/images/${image.image1}`);
            $('#home_image2').attr('src', `../api/images/${image.image2}`);
            $('#home_image3').attr('src', `../api/images/${image.image3}`);
            $('#home_image4').attr('src', `../api/images/${image.image4}`);
           
        },
        error: function (error) {
            // 請求失敗時執行的操作
            console.error('Error:', error);
            console.log('value', value);
        }
    });



});