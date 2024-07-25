<?php include_once "../api/base.php";

if (!isset($_SESSION['user'])) {
    to("../front/index.html");
}

?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>admin</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/remixicon@4.3.0/fonts/remixicon.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ"
        crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../css/style.css">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>


</head>

<body>
    <!-- header -->
    <script src="../js/logo.js"></script>
    <header class="header" id="header">
        <nav class="nav container">
            <div> <a href="#" class="nav__logo" id="logo">
                    Travel
                </a>

                <a href="javascript:void(0);" class="button"
                    onclick="$('#modal').load('../form_logo/name_logo_form.php')">
                    編輯LOGO </a>
            </div>


            <div class="nav__menu" id="nav-menu">
                <ul class="nav__list">
                    <li class="nav__item">
                        <a href="#home" class="nav__link active-link">Home</a>
                    </li>

                    <li class="nav__item">
                        <a href="#about" class="nav__link ">About</a>
                    </li>

                    <li class="nav__item">
                        <a href="#popular" class="nav__link">Popular</a>
                    </li>

                    <li class="nav__item">
                        <a href="#explore" class="nav__link">Explore</a>
                    </li>
                    <li class="nav__item">
                        <a href="../form_login/logout.php" class="nav__link">Logout</a>
                    </li>
                </ul>
                <!-- close button -->
                <div class="nav__close" id="nav-close">
                    <i class="ri-close-large-fill"></i>
                </div>

            </div>
            <!-- Toggle button -->
            <div class="nav__toggle" id="nav-toggle">
                <i class="ri-menu-line"></i>
            </div>

        </nav>
    </header>
    <div id="modal">

    </div>
    <main class="main">
        <!-- ============home============ -->
        <script src="../js/home_ajax.js"></script>
        <section class="home section" id="home">
            <div class="home_img">

            </div>

            <div class="home__shadow" style="height: 800px;"></div>

            <div class="home__container container grid">
                <div class="home__data">

                </div>

                <div class="home__cards grid">
                    <article class="home__card">
                        <img src="" alt="home image" class="home__card-img" id="home_image1">
                        <h3 class="home__card-title" id="home_image1_name">image1</h3>

                        <div class="home__card-shadow"></div>

                    </article>

                    <article class="home__card">
                        <img src="" alt="home image" class="home__card-img" id="home_image2">
                        <h3 class="home__card-title" id="home_image2_name">image2</h3>

                        <div class="home__card-shadow"></div>

                    </article>

                    <article class="home__card">
                        <img src="" alt="home image" class="home__card-img" id="home_image3">
                        <h3 class="home__card-title" id="home_image3_name">image3</h3>

                        <div class="home__card-shadow"></div>

                    </article>

                    <article class="home__card">
                        <img src="" alt="home image" class="home__card-img" id="home_image4">
                        <h3 class="home__card-title" id="home_image4_name">image4</h3>

                        <div class="home__card-shadow"></div>


                    </article>

                </div>
                <div class="home__cards grid" style="display: flex; justify-content: space-around;">
                    <article class="home__card">

                        <a href="javascript:void(0);" class="button"
                            onclick="$('#modal').load('../form_home/image_form_image1.php')">
                            更換照片 </a>

                        <a href="javascript:void(0);" class="button"
                            onclick="$('#modal').load('../form/name_home_image1_form.php')">
                            編輯照片名稱 </a>

                    </article>

                    <article class="home__card">

                        <a href="javascript:void(0);" class="button"
                            onclick="$('#modal').load('../form_home/image_form_image2.php')">
                            更換照片 </a>
                        <a href="javascript:void(0);" class="button"
                            onclick="$('#modal').load('../form/name_home_image2_form.php')">
                            編輯照片名稱 </a>


                    </article>

                    <article class="home__card">

                        <a href="javascript:void(0);" class="button"
                            onclick="$('#modal').load('../form_home/image_form_image3.php')">
                            更換照片 </a>
                        <a href="javascript:void(0);" class="button"
                            onclick="$('#modal').load('../form/name_home_image3_form.php')">
                            編輯照片名稱 </a>
                    </article>

                    <article class="home__card">

                        <a href="javascript:void(0);" class="button"
                            onclick="$('#modal').load('../form_home/image_form_image4.php')">
                            更換照片 </a>
                        <a href="javascript:void(0);" class="button"
                            onclick="$('#modal').load('../form/name_home_image4_form.php')">
                            編輯照片名稱 </a>

                    </article>

                </div>

            </div>
        </section>

        <!-- ============about============ -->
        <script src="../js/about_ajax.js"></script>
        <section class="about section" id="about">
            <div class="about__container container grid">
                <div class="about__data">
                    <h2 class="section__title">
                        Learn More <br>
                        About Travel
                    </h2>

                    <p class="about__description">
                        Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ipsa amet eum inventore molestiae
                        exercitationem modi rem corporis architecto saepe blanditiis.
                    </p>
                    <a href="" class="button">
                        Explore Travel<i class="ri-arrow-right-line"></i>
                    </a>
                </div>
                <div class="about__image">
                    <img class="about__img" src="https://picsum.photos/300/200/?random=23" alt="about image">
                    <div class="about__shadow"></div>
                </div>
            </div>
        </section>

        <!-- ============popular============ -->
        <script src="../js/popular_ajax.js"></script>
        <section class="popular section" id="popular">

            <h2 class="section__title" id="section__title">
                Enjoy The Beauty <br>
                Of the world
            </h2>
            <div class="buttonbox">

                <a href="javascript:void(0);" class="button popular-button"
                    onclick="$('#modal').load('../form_popular/name_popular_title_form.php')">
                    更換文字敘述 </a>
            </div>

            <div class="popular__container container grid">
                <article class="popular__card">
                    <div class="popular__image">
                        <img class="popular__img" src="https://picsum.photos/300/200/?random=25" alt="popular image"
                            id="popular_image1">
                        <div class="popular__shadow"></div>
                    </div>
                    <h2 class="popular__title" id="popular_image1_name">
                        Logan Mountain
                    </h2>
                    <div class="popular__location">
                        <i class="ri-map-pin-line"></i>
                        <span id="popular_image1_span">Canada</span>
                    </div>
                </article>

                <article class="popular__card">
                    <div class="popular__image">
                        <img class="popular__img" src="https://picsum.photos/300/200/?random=27" alt="popular image"
                            id="popular_image2">
                        <div class="popular__shadow"></div>
                    </div>
                    <h2 class="popular__title" id="popular_image2_name">
                        Spike Forest
                    </h2>
                    <div class="popular__location">
                        <i class="ri-map-pin-line"></i>
                        <span id="popular_image2_span">Irland</span>
                    </div>
                </article>

                <article class="popular__card">
                    <div class="popular__image">
                        <img class="popular__img" src="https://picsum.photos/300/200/?random=28" alt="popular image"
                            id="popular_image3">
                        <div class="popular__shadow"></div>
                    </div>
                    <h2 class="popular__title" id="popular_image3_name">
                        Garda Lake
                    </h2>
                    <div class="popular__location">
                        <i class="ri-map-pin-line"></i>
                        <span id="popular_image3_span">Italy</span>
                    </div>
                </article>
            </div>
            <div class="popular__container container grid">
                <article class="popular__card">

                    <a href="javascript:void(0);" class="button"
                        onclick="$('#modal').load('../form_popular/image_form_image1.php')">
                        更換圖片 </a>

                    <a href="javascript:void(0);" class="button"
                        onclick="$('#modal').load('../form_popular/name_popular_image1_form.php')">
                        編輯圖片名稱 </a>
                </article>

                <article class="popular__card">
                    <a href="javascript:void(0);" class="button"
                        onclick="$('#modal').load('../form_popular/image_form_image2.php')">
                        更換圖片 </a>

                    <a href="javascript:void(0);" class="button"
                        onclick="$('#modal').load('../form_popular/name_popular_image2_form.php')">
                        編輯圖片名稱 </a>
                </article>

                <article class="popular__card">
                    <a href="javascript:void(0);" class="button"
                        onclick="$('#modal').load('../form_popular/image_form_image3.php')">
                        更換圖片 </a>

                    <a href="javascript:void(0);" class="button"
                        onclick="$('#modal').load('../form_popular/name_popular_image3_form.php')">
                        編輯圖片名稱 </a>
                </article>
            </div>

        </section>
        <!-- ============explore============ -->
        <script src="../js/explore_ajax.js"></script>
        <section class="explore section" id="explore">
            <div class="explore__container">
                <div class="explore__image">
                    <img class="explore__img" src="https://picsum.photos/1200/800/?random=32" alt="explore image">
                    <div class="explore__shadow"></div>
                </div>
                <div class="explore__content container grid">
                    <div class="explore__data">
                        <!-- <h2 class="section__title">
                            Explore The <br>
                            Best Paradies
                        </h2>
                        <p class="explore__description">
                            Lorem ipsum, dolor sit amet consectetur adipisicing elit. Molestias sit, architecto iste
                            quidem omnis magni quam, adipisci odit laudantium eius mollitia illum nulla iusto
                            necessitatibus repudiandae id aspernatur dolor minima.
                        </p> -->

                    </div>
                    <div class="explore__user">
                        <img src="https://picsum.photos/200/220/?random=30" alt="explore image" class="explore__perfil"
                            id="user">
                        <span class="explore name" id="user_name">David Wu</span>
                        <!-- <a href="../form/image_form.php?class=user" class="button" style="column-gap: 0">
                            更換照片<i class="ri-arrow-right-line"></i>
                        </a> -->

                        <a href="javascript:void(0);" class="button"
                            onclick="$('#modal').load('../form_explore/image_form.php')">
                            更換照片 </a>
                        <div id="modal">

                            <a  href="javascript:void(0);" class="button"
        onclick="$('#modal').load('../form_explore/name_explore_image_form.php')">
        編輯名稱 </a>
                        </div>
                    </div>
                </div>
        </section>
        <!-- ============join============ -->

        <script src="../js/join_ajax.js"></script>
        <section class="join section">
            <div class="join__container container grid">
                <div class="join__data">
                    <h2 class="secion__title">
                        Your Journey <br>
                        Starts Here
                    </h2>
                    <p class="join__description">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequuntur ipsa aperiam amet dolores
                        porro, similique fugiat nam obcaecati deleniti, aliquam quos ad. Modi qui ad ipsa provident
                        libero ducimus voluptates.
                    </p>
                   
                </div>
                <div class="join__image">
                    <div class="join__shadow"></div>
                </div>
            </div>
        </section>
    </main>
    <!-- ============footer============ -->
    <script src="../js/foot.js"></script>
    <footer class="footer">
        <div class="footer__container container grid">
            <div class="footer__content grid">
                <div class="">
                    <a href="#" class="footer__logo">Thanks for watching </a>
                    <p class="footer__description">
                        網頁設計者:吳威儒 <br>
                        前端設計參考:@Bedimcode <br>
                        後端管理設計:獨立開發 <br>
                        設計理念:可以依照使用者需求<br>
                        不需要寫程式就能完全替換照片及編輯文字 <br>
                        輕鬆完成自己的形象網站<br><br>
                        開發者信箱: <a href="d128579744@gmail.com">d128579744@gmail.com</a>
                    </p>

                    <a  href="javascript:void(0);" class="button"
        onclick="$('#modal').load('../form_link/edit_link_form.php')">
        編輯連結</a>
                </div>
                <div class="footer__data grid">
                    <div>
                        <h3 class="footer__title">SOURCE Line</h3>
                        <ul class="footer_links" id="line1">
                            <li> <a href="#" class="footer__link">About Us</a></li>
                            <li> <a href="#" class="footer__link">Features</a></li>
                            <li> <a href="#" class="footer__link">New & Blog</a></li>
                        </ul>
                    </div>
                    <div>
                        <h3 class="footer__title">SOURCE Line</h3>
                        <ul class="footer_links" id="line2">
                            <li> <a href="#" class="footer__link">FAQs</a></li>
                            <li> <a href="#" class="footer__link">History</a></li>
                            <li> <a href="#" class="footer__link">Testimonials</a></li>
                        </ul>
                    </div>
                    <div>
                        <h3 class="footer__title">Contact Web Designer</h3>
                        <ul class="footer_links" id="line3">
                            <li> <a href="#" class="footer__link">Call Center</a></li>
                            <li> <a href="#" class="footer__link">Support Center</a></li>
                            <li> <a href="#" class="footer__link">Contact Us</a></li>
                        </ul>
                    </div>
                    <div>
                        <h3 class="footer__title">WEB DESIGN SOURCE</h3>
                        <ul class="footer_links">
                            <li> <a href="https://www.youtube.com/@Bedimcode" class="footer__link">Wed Design Channel SRC</a></li>
                            <li> <a href="https://github.com/bedimcode/responsive-travel-website-2" class="footer__link">Wed Design Github SRC</a></li>
                            <li> <a href="https://github.com/Remix-Design/RemixIcon" class="footer__link">Icon SRC</a></li>
                            <li> <a href="https://www.youtube.com/watch?v=cgV2tN8gxCg&t=769s" class="footer__link">Wed Design Vedio SRC</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="footer__group">
                <div class="footer__social">
                    <a href="https://www.facebook.com/pages/%E5%8B%9E%E5%8B%95%E9%83%A8%E5%8B%9E%E5%8B%95%E5%8A%9B%E7%99%BC%E5%B1%95%E7%BD%B2%E5%8C%97%E5%9F%BA%E5%AE%9C%E8%8A%B1%E9%87%91%E9%A6%AC%E5%88%86%E7%BD%B2-%E8%81%B7%E6%B6%AF%E7%99%BC%E5%B1%95%E4%B8%AD%E5%BF%83%E7%B1%8C%E5%82%99%E8%99%95/276576596029362?locale=zh_TW" class="footer__social-link" target="_blank">
                        <i class="ri-facebook-line"></i>
                    </a>
                    <a href="https://www.instagram.com/wda.youthsalon/" class="footer__social-link" target="_blank">
                        <i class="ri-instagram-line"></i>
                    </a>
                    <!-- <a href="" class="footer__social-link" target="_blank">
                        <i class="ri-twitter-line"></i>
                    </a> -->
                    <a href="https://www.youtube.com/@user-kn2gz6lx1f" class="footer__social-link" target="_blank">
                        <i class="ri-youtube-line"></i>
                    </a>
                </div>

                <span class="footer__copy">
                   前端設計參考來源: &#169; Copyright Bedimcode. All rights reserved
                </span>
            </div>
    </footer>
    <!-- ============SCROLL UP============ -->
    <a href="#" class="scrollup" id="scroll-up">
        <i class="ri-arrow-up-line"></i>
    </a>

    <!-- ============SCROLLREVEL============ -->
    <script src="js\scrollreveal.js"></script>

    <!-- MAIN JS -->
    <script src="./js/main.js"></script>
</body>

</html>