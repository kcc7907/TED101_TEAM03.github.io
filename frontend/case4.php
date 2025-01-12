<?php
    include("../php/14/connect.php");
    $sql = "SELECT * from `CASE`";
    $statement = $pdo->query($sql);
    $data = $statement->fetchAll();
    // print_r($data);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>居家住宅</title>
    <link rel="stylesheet" href="../lib/reset.css">
    <link rel="stylesheet" href="../css/14.css">
    <link rel="Shortcut Icon" href="../img/favicon.ico">

    <!-- <link rel="stylesheet" href="../css/slick.css"> -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.js"></script>
    <script src="../js/14/14.js"></script>
    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.5.9/slick.min.js"></script> -->
</head>

<body>
    <header class="common">
        <div class="logo">
            <a href="./home2D.html"><img src="../img/headerFooter/logo.svg"></a>
        </div>
        <nav>
            <dav class="nav1">
                <a href="./product.html">救世傢俱</a>
                <a href="./case.html">參考案例</a>
            </dav>
            <dav class="nav2">
                <a href="./qa.html">客戶服務</a>
                <a href="./contest_participate.html">傢聚賞</a>
            </dav>
        </nav>
        <div class="icon">
            <a class="login" href="./meminfo.html">
                <img src="../img/headerFooter/loginIcon.svg" alt="">
            </a>
            <a class="shop" href="./contest_main20.html">
                <img src="../img/headerFooter/shoppingCart.svg" alt="">
            </a>
            <a class="ham">
                <span></span>
                <span></span>
                <span></span>
            </a>
        </div>
    </header>
    <div id="JN">
        <div>
            <section class="select">
                <div class="select_one">
                    <div class="select_click">
                        <div class="page_click_back">
                            <a href="./case.html">
                                <img src="../img/icon/back.png" class="icon_left">
                            </a>
                            <div class="click titleFont2">上一頁</div>
                        </div>
                        <div class="page_click_choice">
                            <a href="./case.html">
                                <img src="../img/icon/043-border.png" class="icon_border">
                            </a>
                            <div class="click titleFont2">回到選擇系列</div>
                        </div>
                        <div class="page_click_next">
                            <a href="./case.html">
                                <img src="../img/icon/next.png" class="icon_right">
                            </a>
                            <div class="click titleFont2">下一頁</div>
                        </div>

                    </div>
                    <div class="exhibit_pic">
                        <img src="../img/interiordesign/home/example/chang/C1569228178583.jpg" class="example_exhibit">

                    </div>
                </div>
                <div class="show_pic">
                    <div class="exhibit_pic2">
                        <img src="../img/interiordesign/home/example/chang/C1569228194525.jpg" class="exhibit_pic2">
                    </div>
                    <div class="designer_intro">
                        <div class="block_color">
                            <p class="intro contentFont">
                                “我是一個出色的傾聽者，我會聽很多東西，直到我能在
                            </p>
                            <p class="intro contentFont">
                                字裡行間讀懂那個人的意思。”
                            </p>
                            <p class="intro contentFont">
                                李超超
                            </p>
                        </div>
                    </div>
                </div>
                <div class="d_pic">
                    <div class="d_pic_word">
                        <div class="pics titleFont2">360ﾟ平面展示照</div>
                    </div>
                    <div class="d_pic_flex">
                        <div class="slider slider-for interior_one">
                            <div class="inter_one">
                                <a href="#">
                                    <img src="../img/interiordesign/home/example/yo/C1569288521171.jpg"
                                        class="interior_pics" id="big">
                                </a>
                            </div>
                            <div class="inter_one">
                                <a href="#">
                                    <img src="../img/interiordesign/home/example/yo/C1569288521483.jpg"
                                        class="interior_pics aa">
                                </a>
                            </div>
                            <div class="inter_one">
                                <a href="#">
                                    <img src="../img/interiordesign/home/example/yo/C1569288521956.jpg"
                                        class="interior_pics aa">
                                </a>
                            </div>
                            <div class="inter_one">
                                <a href="#">
                                    <img src="../img/interiordesign/home/example/yo/C1569288544561.jpg"
                                        class="interior_pics aa">
                                </a>
                            </div>
                            <div class="inter_one">
                                <a href="#">
                                    <img src="../img/interiordesign/home/example/yo/C1569288544722.jpg"
                                        class="interior_pics aa">
                                </a>
                            </div>
                            <div class="inter_one">
                                <a href="#">
                                    <img src="../img/interiordesign/home/example/yo/C1569288522107.jpg"
                                        class="interior_pics aa">
                                </a>
                            </div>
                            <div class="inter_one">
                                <a href="#">
                                    <img src="../img/interiordesign/home/example/yo/C1569288569316.jpg"
                                        class="interior_pics aa">
                                </a>
                            </div>
                            <div class="inter_one">
                                <a href="#">
                                    <img src="../img/interiordesign/home/example/yo/C1569288583834.jpg"
                                        class="interior_pics aa">
                                </a>
                            </div>
                        </div>
                        <div class="slider slider-nav interior_two">
                            <span class="triangle1" id="to_left"></span>
                            <div class="inter_one_pack">
                                <div class="inter_one">
                                    <a href="#">
                                        <img src="../img/interiordesign/home/example/chu bai/C1569288447471.jpg"
                                            class="interior_pics small">
                                    </a>
                                </div>
                                <div class="inter_one">
                                    <a href="#">
                                        <img src="../img/interiordesign/home/example/chu bai/C1569288447652.jpg"
                                            class="interior_pics small">
                                    </a>
                                </div>
                                <div class="inter_one">
                                    <a href="#">
                                        <img src="../img/interiordesign/home/example/chu bai/C1569288447863.jpg"
                                            class="interior_pics small">
                                    </a>
                                </div>
                                <div class="inter_one">
                                    <a href="#">
                                        <img src="../img/interiordesign/home/example/chu bai/C1569288448034.jpg"
                                            class="interior_pics small">
                                    </a>
                                </div>
                                <div class="inter_one">
                                    <a href="#">
                                        <img src="../img/interiordesign/home/example/chu bai/C1569288448386.jpg"
                                            class="interior_pics small">
                                    </a>
                                </div>
                                <div class="inter_one">
                                    <a href="#">
                                        <img src="../img/interiordesign/home/example/chu bai/C1569288448567.jpg"
                                            class="interior_pics small">
                                    </a>
                                </div>
                                <div class="inter_one">
                                    <a href="#">
                                        <img src="../img/interiordesign/home/example/chu bai/C1569288448738.jpg"
                                            class="interior_pics small">
                                    </a>
                                </div>
                                <div class="inter_one">
                                    <a href="#">
                                        <img src="../img/interiordesign/home/example/chu bai/C1569288474271.jpg"
                                            class="interior_pics small">
                                    </a>
                                </div>
                            </div>
                            <span class="triangle2" id="to_right"></span>
                        </div>
                    </div>

                </div>

        </div>

        <div class="more_detail">
            <div class="deatil_contact">
                <img src="../img/interiordesign/excellent/5f4c5e5004c7a.jpg" class="contact_detail">
            </div>
            <div class="contact">
                <div class="titleFont3">想與我們合作設計嗎，救世宅同您創造美好家園</div>
                <div class="titleFont3">我們樂於傾聽你的想法且盡心盡力做得更好</div>
                <div class="more_details">
                    <span class="titleFont3">more detail</span>
                </div>
            </div>
        </div>
        </section>

        <div id="picsLightBox">
            <div>
                <div>
                    <img>
                    <img src="../img/icon/icons8-cancel-64.png" class="pics_lightbox">
                </div>
            </div>
        </div>
    </div>


    <footer class="libft">
        <section class="herf">
            <div class="logo">
                <img src="../img/headerFooter/logo.svg" alt="">
            </div>
            <div class="page">
                <a href="./product.html">救世家具</a>
                <a href="./case.html">優質案例</a>
                <a href="./qa.html">客戶服務</a>
                <a href="./qa.html">聯繫我們</a>
                <a href="./contest_main20.html">傢俱賞</a>
            </div>
        </section>
        <section class="link">
            <div class="scb">
                <label for="mail">訂閱電子報</label>
                <input type="text" class="mail" placeholder="enter your email">
            </div>
            <div class="company">
                <img src="../img/headerFooter/東和鋼鐵.png">
                <img src="../img/headerFooter/cooperate_blum.png">
                <img src="../img/headerFooter/foot_logo.png">
            </div>
        </section>
        <section class="copy">
            <p>Copy right 2020,All Right Reserved | By 救世宅</p>
        </section>
    </footer>


    <script src="../lib/header/header.js"></script>
</body>

</html>