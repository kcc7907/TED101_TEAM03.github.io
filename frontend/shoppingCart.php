<!DOCTYPE html>
<html lang="zh-Hant">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>救世宅 | 購物車</title>
    <link rel="Shortcut Icon" href="../img/favicon.ico">
    <link rel="stylesheet" href="../lib/reset.css">
    <link rel="stylesheet" href="../css/header.css">
    <link rel="stylesheet" href="../css/footer.css">
    <link rel="stylesheet" href="../css/shoppingCart.css">
    <script src="../lib/js/jquery.js"></script>
    <script src="../lib/js/vue.js"></script>
    <script src='../lib/js/axios.js'></script>
    <script defer src="../js/20/shopCommon.js"></script>
    <script defer src="../js/20/shoppingCart.js"></script>
    <script defer src="../lib/header/header.js"></script>

    <link rel="stylesheet" href="../css/logSign.css">
    <script src="../lib/login/lazy-line-painter-1.9.6.min.js"></script>
    <script defer src="../lib/login/logSign.js"></script>
</head>

<body class="kcc_cartbody">
    <?php include("../lib/login/loginInclude.html"); ?>
    <?php include("../lib/header/header_Include.html"); ?>
    <div class="kcc_shoppingcat">
        <div class="top">
            <div class="title">
                <div class="circle">1</div>
                <h2 class="title1">購物車</h2>
            </div>
            <div class="title">
                <div class="circle">2</div>
                <h2 class="title2">訂單資料</h2>
            </div>
            <div class="title">
                <div class="circle">3</div>
                <h2 class="title3">完成訂購</h2>
            </div>
        </div>
        <div class="all" id="all">
            <input id="checkAll" class="checkAll" type="checkbox" @click='checkAll'>
            <label for="checkAll"><span></span></label>
            <button class="delAll" @click='delCheck'>刪除勾選商品</button>
        </div>
        <main>
            <div class="left" id="list">
                <ul class="product">
                    <!-- <transition-group name="slide-fade" tag="li"> -->
                    <my-list v-for='(key,index) in rp' :key="index" :myindex="index" :mycheck='check' :prd-id="key.PRD_ID"
                        :url="key.PIMG_URL" :prd-name='key.PRD_NAME' :prd-price='key.PRD_PRICE'
                        :discount-id='key.DISCOUNT_ID' :prd-mtl='key.PRD_MATERIAL'></my-list>
                    <!-- </transition-group> -->
            </div>
            <div class="right" id="right">
                <h2 class="titlenum">合計商品{{proTotal}}項</h2>
                <div class="cart_top">
                    <div class="cart_top_list">
                        <span class="unflod">展開清單<img src="../img/shoppincart/cart_down.svg" class="openimg"></span>
                        <ul class="tatal_list">
                            <li class="tatal_li" v-for="(item, index) in 1" :key="index">
                                <p class="tatal_list_name">商品名商</p>
                                <p class="tatal_list_price">1000元</p>
                                <p class="tatal_list_num">X1</p>
                            </li>
                            <!-- <li class="tatal_li">
                                <p class="tatal_list_name">商品名商</p>
                                <p class="tatal_list_price">1000元</p>
                                <p class="tatal_list_num">X1</p>
                            </li>
                            -->
                        </ul>
                    </div>
                    <div class="totalconut">
                        <div class="type">
                            <p class="cart_total">金額</p>
                            <p class="cart_discount">折扣</p>
                            <p class="Shipping">運費</p>
                            <p class="final_price">結帳金額</p>
                        </div>
                        <div class="pricenum">
                            <div class="merge cart_totalnum">
                                <p class="dollar">$</p>
                                <p class="cart_price1">{{total}}</p>
                            </div>
                            <div class="merge discount_num">
                                <p class="dollar">$</p>
                                <p class="cart_price2">{{discount}}</p>
                            </div>
                            <div class="merge Shipping_num">
                                <p class="dollar">$</p>
                                <p class="cart_price3">{{Shipping}}</p>
                            </div>
                            <div class="merge final_num">
                                <p class="dollar">$</p>
                                <p class="cart_price4">{{final}}</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="cart_btn">
                    <button class="backstep" type="button"  @click="backShop"><img src="../img/shoppincart/cart_left.svg"
                            class="backimg" @click="backShop">返回商城</button>
                    <button class="buy" type="button" @click='loginCheck'>前往結帳</button>
                </div>
            </div>
            <div class="kc_popup" v-if="show">
                <h2>{{text}}</h2>
                <div class="btnbox">
                    <p class="return" @click="close">返回</p>
                    <p class="checkok" @click="popSwitch">確認</p>
                </div>
            </div>
        </main>
    </div>


    <?php include("../lib/header/footerInclude.html"); ?>
</body>

</html>