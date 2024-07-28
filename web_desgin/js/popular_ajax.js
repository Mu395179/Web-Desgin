
$(document).ready(function () {

    let gettitle = '../api_popular/get_title.php';


    $.ajax({
        type: "GET",
        url: gettitle,
        dataType: "json",
        success: function (titlename) {

            console.log('Success:', titlename);
            $.each(titlename, function (index, item) {
                if (item.title) {
                    $('#section__title').text(item.title);
                }
            });
        },
        error: function (error) {

            console.error('Error:', error);
        }
    });


    let getpopularimage = '../api_popular/get_popular_image.php';

    $.ajax({
        type: "get",
        url: getpopularimage,
        data: "image",
        dataType: "json",
        success: function (image) {
            // 請求成功時執行的操作
            console.log('Success:', image);

            $('#popular_image1').attr('src', `../api/images/${image.popular_image1}`);
            $('#popular_image2').attr('src', `../api/images/${image.popular_image2}`);
            $('#popular_image3').attr('src', `../api/images/${image.popular_image3}`);

        },
        error: function (error) {
            // 請求失敗時執行的操作
            console.error('Error:', error);
            console.log('value', value);
        }
    });

    let getpopularimagename = '../api_popular/get_popular_image_name.php';


    $.ajax({
        type: "GET",
        url: getpopularimagename,
        dataType: "json",
        success: function (imagename) {

            console.log('Success:', imagename);

            $('#popular_image1_name').text(imagename[0].name);
            $('#popular_image2_name').text(imagename[1].name);
            $('#popular_image3_name').text(imagename[2].name);

            $('#popular_image1_span').text(imagename[0].text);
            $('#popular_image2_span').text(imagename[1].text);
            $('#popular_image3_span').text(imagename[2].text);


        },
        error: function (error) {

            console.error('Error:', error);
            console.error('imagename:', imagename);
        }
    });

});