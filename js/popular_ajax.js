
$(document).ready(function () {

    let gettitle = '../api_popular/get_title.php';


    $.ajax({
        type: "GET",
        url: gettitle,
        dataType: "json",
        success: function (titlename) {
            // 请求成功时执行的操作
            console.log('Success:', titlename);
            $.each(titlename, function(index, item) {
                if (item.title) {
                    $('#section__title').text(item.title);
                }
            });
        },
        error: function (error) {
            // 请求失败时执行的操作
            console.error('Error:', error);
        }
    });


    // let getpopularimage = '../api_popular/get_popular_image.php';

    // $.ajax({
    //     type: "get",
    //     url: getpopularimage,
    //     data: "image",
    //     dataType: "json",
    //     success: function (image) {
    //         // 請求成功時執行的操作
    //         console.log('Success:', image);

    //         $('#popular_image1').attr('src', `../api/images/${image.image1}`);
    //         $('#popular_image2').attr('src', `../api/images/${image.image2}`);
    //         $('#popular_image3').attr('src', `../api/images/${image.image3}`);
    //         $('#popular_image4').attr('src', `../api/images/${image.image4}`);

    //     },
    //     error: function (error) {
    //         // 請求失敗時執行的操作
    //         console.error('Error:', error);
    //         console.log('value', value);
    //     }
    // });

    // let getpopularimagename = '../api_popular/get_popular_image_name.php';


    // $.ajax({
    //     type: "GET",
    //     url: getpopularimagename,
    //     dataType: "json",
    //     success: function (imagename) {
    //         // 请求成功时执行的操作
    //         console.log('Success:', imagename);

    //         $('#hpopular_image1_name').text(imagename.image1);
    //         $('#popular_image2_name').text(imagename.image2);
    //         $('#popular_image3_name').text(imagename.image3);
    //         $('#popular_image4_name').text(imagename.image4);
    //     },
    //     error: function (error) {
    //         // 请求失败时执行的操作
    //         console.error('Error:', error);
    //         console.error('imagename:', imagename);
    //     }
    // });

});