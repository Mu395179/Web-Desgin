$(document).ready(function () {
    // 這個函數會在DOM完全載入後執行

    // 綁定按鈕的點擊事件
    const line1 = $('#line1');

    let getline1 = '../api_link/get_line1_link.php';

    $.ajax({
        type: "GET",
        url: getline1,
        dataType: "json",
        success: function (data) {
            // 請求成功時執行的操作
            console.log('Success:', data);
            let result = '';
            $.each(data[0], function (key, value) { // 這裡需要使用data[0]來訪問內部數組
                console.log('value', value);
                result += `
                 <li> <a href="${value.source}" class="footer__link">${value.name}</a></li>
                `;
            });
            console.log('result', result);
            line1.html(result); // 這裡應該使用 .html() 函數
        },
        error: function (error) {
            // 請求失敗時執行的操作
            console.error('Error:', error);
        }
    });

    const line2 = $('#line2');
    let getline2 = '../api_link/get_line2_link.php';

    $.ajax({
        type: "GET",
        url: getline2,
        dataType: "json",
        success: function (data) {
            // 請求成功時執行的操作
            console.log('Success:', data);
            let result = '';
            $.each(data[0], function (key, value) { // 這裡需要使用data[0]來訪問內部數組
                console.log('value', value);
                result += `
                 <li> <a href="${value.source}" class="footer__link">${value.name}</a></li>
                `;
            });
            console.log('result', result);
            line2.html(result); // 這裡應該使用 .html() 函數
        },
        error: function (error) {
            // 請求失敗時執行的操作
            console.error('Error:', error);
        }
    });

    const line3 = $('#line3');
    let getline3 = '../api_link/get_line3_link.php';

    $.ajax({
        type: "GET",
        url: getline3,
        dataType: "json",
        success: function (data) {
            // 請求成功時執行的操作
            console.log('Success:', data);
            let result = '';
            $.each(data[0], function (key, value) { // 這裡需要使用data[0]來訪問內部數組
                console.log('value', value);
                result += `
                 <li> <a href="${value.source}" class="footer__link">${value.name}</a></li>
                `;
            });
            console.log('result', result);
            line3.html(result); // 這裡應該使用 .html() 函數
        },
        error: function (error) {
            // 請求失敗時執行的操作
            console.error('Error:', error);
        }
    });


});