<!DOCTYPE html>
<?php
include_once "changeLang.php";
?>
<html lang="en">

    <head>
        <title>WESHOP - Charger avec smart force</title>
        <link rel="shortcut icon" type="image/x-icon" href="images/logo.png">
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,500,600,700" rel="stylesheet">
        <link rel="stylesheet" href="css/open-iconic-bootstrap.min.css">
        <link rel="stylesheet" href="css/animate.css">
        <link rel="stylesheet" href="css/owl.carousel.min.css">
        <link rel="stylesheet" href="css/owl.theme.default.min.css">
        <link rel="stylesheet" href="css/magnific-popup.css">
        <link href="css/css.css" rel="stylesheet" media="screen">
        <link rel="stylesheet" href="css/aos.css">
        <link rel="stylesheet" href="css/ionicons.min.css">
        <link rel="stylesheet" href="css/bootstrap-datepicker.css">
        <link rel="stylesheet" href="css/jquery.timepicker.css">
        <link rel="stylesheet" href="css/flaticon.css">
        <link rel="stylesheet" href="css/icomoon.css">
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" type="text/css" href="static/iconfont.css">
        <link rel="stylesheet" href="static/chat.css">
        <script type="text/javascript" src="js/jquery-3.2.1.min.js"></script>
        <link rel="stylesheet" href="css/Devis_InnerHTML.css">
    </head>

    <body>
        <!--导航栏-->
        <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
            <div class="container">
                <a href="index.php"><img src="images/title.png" class="Accueil"></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="oi oi-menu">Menu</span>
                </button>

                <div class="collapse navbar-collapse" id="ftco-nav">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item"><a href="index.php" class="nav-link"><?php echo $GLOBALS['L']['menu_index'] ?></a></li>
                        <li class="nav-item"><a href="presentation.php" class="nav-link"><?php echo $GLOBALS['L']['menu_presentation'] ?></a></li>
                        <li class="nav-item active"><a href="produits.php" class="nav-link"><?php echo $GLOBALS['L']['menu_product'] ?></a></li>
                        <li class="nav-item"><a class="nav-link" href="QRShop.php"><?php echo $GLOBALS['L']['menu_qrshop'] ?></a></li>
                        <li class="nav-item"><a href="NosClients.php" class="nav-link"><?php echo $GLOBALS['L']['menu_customer'] ?></a></li>
                        <li class="nav-item"><a href="contact.php" class="nav-link"><?php echo $GLOBALS['L']['menu_contact'] ?></a></li>

                        <li class="nav-item cta"><a href="index.php#devis" class="nav-link"><span><?php echo $GLOBALS['L']['menu_budget'] ?></span></a></li>
                        &nbsp; &nbsp; &nbsp; &nbsp;
                        <li class="nav-item cta"><a class="nav-link" href="javascript:void(0);" onclick="changeLang()">中文/Fr</a></li>



                    </ul>
                </div>

            </div>
        </nav>
        <!-- END nav -->

        <div class="hero-wrap hero-wrap-2" style="background-image: url(images/bg_2.jpg);" data-stellar-background-ratio="0.5">
            <div class="overlay"></div>
            <div class="container-fluid">
                <div class="row no-gutters d-flex slider-text align-items-center justify-content-center" data-scrollax-parent="true">
                    <div class="col-md-6 ftco-animate text-center" data-scrollax=" properties: { translateY: '70%' }">

                        <h1 class="mb-3 bread" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }"><?php echo $GLOBALS['L']['product'] ?></h1>
                    </div>
                </div>
            </div>
        </div>

        <section class="ftco-section ftco-counter img" id="section-counter" style="background-image: url(images/bg_1.jpg);" data-stellar-background-ratio="0.5">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-11">
                        <div class="row">
                            <div class="col-md-3 d-flex justify-content-center counter-wrap ftco-animate">
                                <div class="block-18 text-center">
                                    <div class="text">
                                        <strong class="number" data-number="2">0</strong>
                                        <span><?php echo $GLOBALS['L']['banners_agency'] ?></span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 d-flex justify-content-center counter-wrap ftco-animate">
                                <div class="block-18 text-center">
                                    <div class="text">
                                        <strong class="number" data-number="1500">0</strong>
                                        <span><?php echo $GLOBALS['L']['banners_shop'] ?></span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 d-flex justify-content-center counter-wrap ftco-animate">
                                <div class="block-18 text-center">
                                    <div class="text">
                                        <strong class="number" data-number="6">0</strong>
                                        <span><?php echo $GLOBALS['L']['banners_experience'] ?></span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 d-flex justify-content-center counter-wrap ftco-animate">
                                <div class="block-18 text-center">
                                    <div class="text">
                                        <strong class="number" data-number="3000">0</strong>
                                        <span><?php echo $GLOBALS['L']['banners_user'] ?></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <section class="ftco-section">
            <div class="container">
                <div class="row d-md-flex">
                    <div class="col-md-6 ftco-animate img about-image" style="background-image: url(images/work3.png);">
                    </div>
                    <div class="col-md-6 ftco-animate p-md-5">
                        <div class="row">
                            <div class="col-md-12 nav-link-wrap mb-5">
                                <div class="nav ftco-animate nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                                </div>
                            </div>
                            <div class="col-md-12 d-flex align-items-center">
                                <div class="tab-pane fade show active" id="v-pills-whatwedo" role="tabpanel" aria-labelledby="v-pills-whatwedo-tab">
                                    <div>
                                        <h2 class="mb-4"><?php echo $GLOBALS['L']['product_cashier'] ?></h2>
                                        <p><?php echo $GLOBALS['L']['product_cashier_1'] ?></p>
                                        <p><?php echo $GLOBALS['L']['product_cashier_2'] ?></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="ftco-section">
            <div class="container">
                <div class="row d-md-flex">
                    <div class="col-md-6 ftco-animate p-md-5">
                        <div class="row">
                            <div class="col-md-12 nav-link-wrap mb-5">
                                <div class="nav ftco-animate nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                                </div>
                            </div>
                            <div class="col-md-12 d-flex align-items-center">
                                <div class="tab-pane fade show active" id="v-pills-whatwedo" role="tabpanel" aria-labelledby="v-pills-whatwedo-tab">
                                    <div>
                                        <h2 class="mb-4"><?php echo $GLOBALS['L']['product_pad'] ?></h2>
                                        <p><?php echo $GLOBALS['L']['product_pad_1'] ?></p>
                                        <p><?php echo $GLOBALS['L']['product_pad_2'] ?></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 ftco-animate img about-image" style="background-image: url(images/work1.png);"></div>
                </div>
            </div>
        </section>



        <section class="ftco-section">
            <div class="container">
                <div class="row d-md-flex">
                    <div class="col-md-6 ftco-animate img about-image" style="background-image: url(images/work4.png);">
                    </div>
                    <div class="col-md-6 ftco-animate p-md-5">
                        <div class="row">
                            <div class="col-md-12 nav-link-wrap mb-5">
                                <div class="nav ftco-animate nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">

                                </div>
                            </div>
                            <div class="col-md-12 d-flex align-items-center">


                                <div class="tab-pane fade show active" id="v-pills-whatwedo" role="tabpanel" aria-labelledby="v-pills-whatwedo-tab">
                                    <div>
                                        <h2 class="mb-4"><?php echo $GLOBALS['L']['product_phone'] ?></h2>
                                        <p><?php echo $GLOBALS['L']['product_phone_1'] ?></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>




        <footer class="ftco-footer ftco-bg-dark ftco-section">
            <div class="container">
                <div class="row mb-5">
                    <div class="col-md-4">
                        <div class="ftco-footer-widget mb-5">
                            <h2 class="ftco-heading-2">WESHOP</h2>
                            <p><?php echo $GLOBALS['L']['footer_weshop'] ?></p>
                        </div>
                        <ul class="ftco-footer-social list-unstyled float-md-left float-lft ">
                            <li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
                            <li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
                            <li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
                        </ul>
                    </div>

                    <div class="col-md-4 pr-md-4">
                        <div class="ftco-footer-widget mb-4">
                            <h2 class="ftco-heading-2"><?php echo $GLOBALS['L']['footer_article'] ?></h2>
                            <div class="block-21 mb-4 d-flex">
                                <a id="tweet1_img" class="blog-img mr-4" style="background-image: url(images/image_1.jpg);"></a>
                                <div class="text">
                                    <h3 class="heading"><a id="tweet1_title" href="#">Even the all-powerful Pointing has no control about</a></h3>
                                    <div class="meta">
                                        <div><span class="icon-calendar"> </span>
                                            <h7 id="tweet1_date"> Sept 15, 2018</h7>
                                        </div>
                                        <div><span class="icon-person"></span> Admin</div>
                                        <div><span class="icon-chat"></span> 19</div>
                                    </div>
                                </div>
                            </div>
                            <div class="block-21 mb-4 d-flex">
                                <a id="tweet2_img" class="blog-img mr-4" style="background-image: url(images/image_2.jpg);"></a>
                                <div class="text">
                                    <h3 class="heading"><a id="tweet2_title" href="#">Even the all-powerful Pointing has no control about</a></h3>
                                    <div class="meta">
                                        <div><span class="icon-calendar"> </span>
                                            <h7 id="tweet2_date"> Sept 15, 2018</h7>
                                        </div>
                                        <div><span class="icon-person"></span> Admin</div>
                                        <div><span class="icon-chat"></span> 19</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="ftco-footer-widget mb-4">
                            <h2 class="ftco-heading-2"><?php echo $GLOBALS['L']['footer_contact'] ?></h2>
                            <div class="block-23 mb-3">
                                <ul>
                                    <li><a><span class="icon icon-map-marker"></span><span class="text">8 avenue Henri Barbusse, 93000 Bobigny</span></a></li>
                                    <li><a><span class="icon icon-phone"></span><span class="text">+33 1 48 46 12 88</span></a></li>
                                    <li><a><span class="icon icon-envelope"></span><span class="text">contact@weshop.fr</span></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12 text-center">

                        <p>
                            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                            Copyright &copy;<script>
                                document.write(new Date().getFullYear());
                            </script> <?php echo $GLOBALS['L']['footer_right'] ?>
                            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                        </p>
                    </div>
                </div>
            </div>
        </footer>



        <!-- loader -->
        <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px">
            <circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee" />
            <circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00" /></svg></div>


        <!--客服悬浮窗-->
        <div class="livechat-girl animated"> <img class="girl" src="images/en_3.png">
            <div
                class="livechat-hint rd-notice-tooltip rd-notice-type-success rd-notice-position-left single-line show_hint">
                <div class="rd-notice-content"><?php echo $GLOBALS['L']['chat_popup'] ?></div>
            </div>
            <div class="animated-circles">
                <div class="circle c-1"></div>
                <div class="circle c-2"></div>
                <div class="circle c-3"></div>
            </div>
        </div>
        <!--客服悬浮窗结束-->

        <!--客服悬浮窗JS-->
        <script type="text/javascript">
            $(function () {
                if (localStorage.getItem("lang") == "zh") {
                    var lang = "zh-CN";
                } else if (localStorage.getItem("lang") == "fr") {
                    var lang = "fr";
                } else {
                    var lang = navigator.language;
                }
                $.ajax({
                    url: 'changeData.php',
                    type: 'post',
                    data: {
                        table: 'wechatlist',
                        sql: 'SELECT * FROM wechatList;'
                    }
                }).done(function (msg) {
                    //php中json转js数组
                    var data_obj = eval(msg);
                    // alert(data_obj[0]);
                    for (var i = 0; i < 2; i++) {
                        var pruductNum = i + 1;
                        $("#tweet" + pruductNum + "_title").text(data_obj[i].title);
                        $("#tweet" + pruductNum + "_title").attr("href", data_obj[i].url);
                        $("#tweet" + pruductNum + "_url").attr("href", data_obj[i].url);
                        $("#tweet" + pruductNum + "_date").text(data_obj[i].reg_time);
                        document.getElementById("tweet" + pruductNum + "_img").style.backgroundImage = "url('" + data_obj[i].imageUrl + "')";
                    }
                })
            });

            function changeLang() {
                if (localStorage.getItem("lang") != null) {
                    //有转换记录
                    //alert("检测成功,当前为:" + localStorage.getItem("lang"));
                    //法语转中文
                    if (localStorage.getItem("lang") == "fr") {
                        var language = "zh";
                        localStorage.setItem("lang", language);
                        // alert("转换成功，转换为：" + localStorage.getItem("lang"));
                        $.ajax({
                            url: 'changeLang.php',
                            type: 'post',
                            data: {
                                lang: 'zh',
                            },
                            success: function (msg) {
                                location.reload();
                            }
                        });
                        //中文转法语
                    } else {
                        var language = "fr";
                        localStorage.setItem("lang", language);
                        // alert("转换成功，转换为：" + localStorage.getItem("lang"));
                        $.ajax({
                            url: 'changeLang.php',
                            type: 'post',
                            data: {
                                lang: 'fr',
                            },
                            success: function (msg) {
                                location.reload();
                            }
                        });
                    }
                } else {
                    //第一次转换
                    // alert("未检测到");
                    var lang = navigator.language;
                    //已经是中文页面，转换语言显示法语
                    if (lang == "zh-CN") {
                        var language = "fr";
                        localStorage.setItem("lang", language);
                    } else {
                        var language = "zh";
                        localStorage.setItem("lang", language);
                    }
                }
            }
            (function ($) {
                setInterval(function () {
                    if ($(".animated-circles").hasClass("animated")) {
                        $(".animated-circles").removeClass("animated");
                    } else {
                        $(".animated-circles").addClass('animated');
                    }
                }, 3000);
                var wait = setInterval(function () {
                    $(".livechat-hint").removeClass("show_hint").addClass("hide_hint");
                    clearInterval(wait);
                }, 4500);
                $(".livechat-girl").hover(function () {
                    clearInterval(wait);
                    $(".livechat-hint").removeClass("hide_hint").addClass("show_hint");
                }, function () {
                    $(".livechat-hint").removeClass("show_hint").addClass("hide_hint");
                }).click(function () {
                    $(".chatBox").toggle(100);
                    $(".chatBox-head-two").toggle();
                    $(".chatBox-kuang").fadeToggle();
                    $(".livechat-girl").css("display", "none");
                });
            })(jQuery);
        </script>
        <!--客服悬浮窗JS结束-->
        <!-- 客服聊天框 -->
        <div class="chatContainer" style="z-index: 100;">
            <div class="chat-message-num"></div>
            <div class="chatBox" ref="chatBox" style="display: none">
                <div class="chatBox-head">
                    <div class="chatBox-head-two">
                        <div class="chat-people">
                            <div class="ChatInfoHead">
                                <img src="static/icon01.png" alt="头像" />
                            </div>
                        </div>
                        <div class="chat-close"><span style="font-weight: bolder;">&times;</span></div>
                    </div>
                </div>
                <div class="chatBox-info">
                    <div class="chatBox-kuang" ref="chatBoxkuang">
                        <div class="chatBox-content">
                            <div class="chatBox-content-demo" id="chatBox-content-demo">

                                <div class="clearfloat">
                                    <div class="author-name">
                                        <small class="chat-date" id="systime">2020-9-4 15:33:33</small>
                                    </div>
                                    <div class="left">
                                        <div class="chat-avatars"><img src="static/icon01.png" alt="头像" /></div>
                                        <div class="chat-message">
                                            <?php echo $GLOBALS['L']['chat_msg_default'] ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="chatBox-send">
                            <!-- <div class="div-textarea"></div> -->
                            <div>
                                <input class="div-textarea" id="msg_client" style="border: 0px;">
                            </div>
                            <div>
                                <button id="chat-biaoqing" class="btn-default-styles">
                                    <i class="iconfont icon-biaoqing"></i>
                                </button>
                                <label id="chat-tuxiang" title="发送图片" for="inputImage" class="btn-default-styles">
                                    <input type="file" onchange="selectImg(this)" accept="image/jpg,image/jpeg,image/png"
                                           name="file" id="inputImage" class="hidden">
                                    <i class="iconfont icon-tuxiang"></i>
                                </label>
                                <button id="chat-fasong" class="btn-default-styles"><i
                                        class="iconfont icon-fasong"></i></button>
                            </div>
                            <div class="biaoqing-photo">
                                <ul>
                                    <li><span class="emoji-picker-image" style="background-position: -9px -18px;"></span>
                                    </li>
                                    <li><span class="emoji-picker-image" style="background-position: -40px -18px;"></span>
                                    </li>
                                    <li><span class="emoji-picker-image" style="background-position: -71px -18px;"></span>
                                    </li>
                                    <li><span class="emoji-picker-image" style="background-position: -102px -18px;"></span>
                                    </li>
                                    <li><span class="emoji-picker-image" style="background-position: -133px -18px;"></span>
                                    </li>
                                    <li><span class="emoji-picker-image" style="background-position: -164px -18px;"></span>
                                    </li>
                                    <li><span class="emoji-picker-image" style="background-position: -9px -52px;"></span>
                                    </li>
                                    <li><span class="emoji-picker-image" style="background-position: -40px -52px;"></span>
                                    </li>
                                    <li><span class="emoji-picker-image" style="background-position: -71px -52px;"></span>
                                    </li>
                                    <li><span class="emoji-picker-image" style="background-position: -102px -52px;"></span>
                                    </li>
                                    <li><span class="emoji-picker-image" style="background-position: -133px -52px;"></span>
                                    </li>
                                    <li><span class="emoji-picker-image" style="background-position: -164px -52px;"></span>
                                    </li>
                                    <li><span class="emoji-picker-image" style="background-position: -9px -86px;"></span>
                                    </li>
                                    <li><span class="emoji-picker-image" style="background-position: -40px -86px;"></span>
                                    </li>
                                    <li><span class="emoji-picker-image" style="background-position: -71px -86px;"></span>
                                    </li>
                                    <li><span class="emoji-picker-image" style="background-position: -102px -86px;"></span>
                                    </li>
                                    <li><span class="emoji-picker-image" style="background-position: -133px -86px;"></span>
                                    </li>
                                    <li><span class="emoji-picker-image" style="background-position: -164px -86px;"></span>
                                    </li>
                                    <li><span class="emoji-picker-image" style="background-position: -9px -120px;"></span>
                                    </li>
                                    <li><span class="emoji-picker-image" style="background-position: -40px -120px;"></span>
                                    </li>
                                    <li><span class="emoji-picker-image" style="background-position: -71px -120px;"></span>
                                    </li>
                                    <li><span class="emoji-picker-image" style="background-position: -102px -120px;"></span>
                                    </li>
                                    <li><span class="emoji-picker-image" style="background-position: -133px -120px;"></span>
                                    </li>
                                    <li><span class="emoji-picker-image" style="background-position: -164px -120px;"></span>
                                    </li>
                                    <li><span class="emoji-picker-image" style="background-position: -9px -154px;"></span>
                                    </li>
                                    <li><span class="emoji-picker-image" style="background-position: -40px -154px;"></span>
                                    </li>
                                    <li><span class="emoji-picker-image" style="background-position: -71px -154px;"></span>
                                    </li>
                                    <li><span class="emoji-picker-image" style="background-position: -102px -154px;"></span>
                                    </li>
                                    <li><span class="emoji-picker-image" style="background-position: -133px -154px;"></span>
                                    </li>
                                    <li><span class="emoji-picker-image" style="background-position: -164px -154px;"></span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- 客服聊天框部分结束 -->

        <!--客服对话框JS部分-->
        <script>
            function timenow() {
                var myDate = new Date();
                var times = myDate.toLocaleString();
                return times
            }

            document.getElementById('systime').innerHTML = timenow();
            screenFuc();

            function screenFuc() {
                var topHeight = $(".chatBox-head").innerHeight(); //聊天头部高度
                //屏幕小于768px时候,布局change
                var winWidth = $(window).innerWidth();
                if (winWidth <= 768) {
                    var totalHeight = $(window).height(); //页面整体高度
                    //中间内容高度
                    $(".chatBox-info").css("height", totalHeight - topHeight);
                    $(".chatBox-content-demo").css("height", totalHeight - topHeight - 55);
                    // $(".chatBox-list").css("height", totalHeight - topHeight-200);
                    $(".chatBox-kuang").css("height", totalHeight - topHeight);
                    $(".div-textarea").css("width", winWidth - 106);
                } else {
                    $(".chatBox-info").css("height", 495);
                    $(".chatBox-content").css("height", 448);
                    $(".chatBox-content-demo").css("height", 448);
                    $(".chatBox-list").css("height", 495);
                    $(".chatBox-kuang").css("height", 495);
                    // !import不可覆盖，以删除
                    $(".div-textarea").css("width", 245);
                }
            }
            (window.onresize = function () {
                screenFuc();
            })();
            //未读信息数量为空时
            var totalNum = $(".chat-message-num").html();
            if (totalNum == "") {
                $(".chat-message-num").css("padding", 0);
            }
            $(".message-num").each(function () {
                var wdNum = $(this).html();
                if (wdNum == "") {
                    $(this).css("padding", 0);
                }
            });


            $(".chat-close").click(function () {
                $(".chatBox").toggle(100);
                $(".chatBox-head-two").toggle();
                $(".chatBox-kuang").fadeToggle();
                $(".livechat-girl").css("display", "block");
            })


            // changer
            function repeatClientMsg(ques) {
                if (ques != "") {
                    $(".chatBox-content-demo").append("<div class=\"clearfloat\">" +
                            "<div class=\"author-name\"><small class=\"chat-date\" id=\"timenow\"></small> </div> " +
                            "<div class=\"right\"> <div class=\"chat-message\"> " + ques + " </div> " +
                            "<div class=\"chat-avatars\"><img src=\"static/icon00.png\" alt=\"头像\" /></div> </div> </div>");
                }
                $(document).ready(function () {
                    $("#chatBox-content-demo").scrollTop($("#chatBox-content-demo")[0].scrollHeight);
                });
            }

            //changer
            function replyNum(num) {
                if (num == 1) {
                    repeatClientMsg("balabala1");
                    var re = "1.我们是冠军！";
                    reply(re);
                } else if (num == 2) {
                    repeatClientMsg("balabala2");
                    var re = "2.我们是冠军！我们是冠军！";
                    reply(re);
                } else if (num == 3) {
                    repeatClientMsg("balabala3");
                    var re = "3.我们是冠军！我们是冠军！我们是冠军！";
                    reply(re);
                } else if (num == 4) {
                    repeatClientMsg("balabala4");
                    var re = "4.我们是冠军！我们是冠军！我们是冠军！我们是冠军！";
                    reply(re);
                }
            }


            //      发送表情
            $("#chat-biaoqing").click(function () {
                $(".biaoqing-photo").toggle();
            });
            $(document).click(function () {
                $(".biaoqing-photo").css("display", "none");
            });
            $("#chat-biaoqing").click(function (event) {
                event.stopPropagation(); //阻止事件
            });

            $(".emoji-picker-image").each(function () {
                $(this).click(function () {
                    var bq = $(this).parent().html();
                    console.log(bq)
                    $(".chatBox-content-demo").append("<div class=\"clearfloat\">" +
                            "<div class=\"author-name\"><small class=\"chat-date\" id=\"timenow\"></small> </div> " +
                            "<div class=\"right\"> <div class=\"chat-message\"> " + bq + " </div> " +
                            "<div class=\"chat-avatars\"><img src=\"static/icon00.png\" alt=\"头像\" /></div> </div> </div>");
                    //发送后关闭表情框
                    $(".biaoqing-photo").toggle();
                    //聊天框默认最底部
                    $(document).ready(function () {
                        $("#chatBox-content-demo").scrollTop($("#chatBox-content-demo")[0].scrollHeight);
                    });
                    document.getElementById('timenow').innerHTML = timenow();
                })
            });
            //自动回复
            function reply(textContent) {
                if (textContent != "") {
                    $(".chatBox-content-demo").append("<div class=\"clearfloat\">" +
                            "<div class=\"author-name\"><small class=\"chat-date\" id=\"timenow\"></small> </div> " +
                            "<div class=\"left\"><div class=\"chat-avatars\"><img src=\"static/icon01.png\" alt=\"头像\" /></div>  " +
                            "<div class=\"chat-message\"> " + textContent + " </div> </div> </div>");
                    //聊天框默认最底部
                    $(document).ready(function () {
                        $("#chatBox-content-demo").scrollTop($("#chatBox-content-demo")[0].scrollHeight);
                    });
                    document.getElementById('timenow').innerHTML = timenow();
                }
            }
            //      发送图片
            function selectImg(pic) {
                if (!pic.files || !pic.files[0]) {
                    return;
                }
                var reader = new FileReader();
                reader.onload = function (evt) {
                    var images = evt.target.result;
                    $(".chatBox-content-demo").append("<div class=\"clearfloat\">" +
                            "<div class=\"author-name\"><small class=\"chat-date\" id=\"timenow\"></small> </div> " +
                            "<div class=\"right\"> <div class=\"chat-message\"><img src=" + images + "></div> " +
                            "<div class=\"chat-avatars\"><img src=\"static/icon01.png\" alt=\"头像\" /></div> </div> </div>");
                    //聊天框默认最底部
                    $(document).ready(function () {
                        $("#chatBox-content-demo").scrollTop($("#chatBox-content-demo")[0].scrollHeight);
                    });
                    document.getElementById('timenow').innerHTML = timenow();
                };

                reader.readAsDataURL(pic.files[0]);

            }
        </script>
        <!--客服对话框JS部分结束-->

        <!--检测是否有人工在线-->
        <?php
        require 'conn.php';
        $host = '192.168.1.120';
        $status = mysqli_query($conn, "SELECT COUNT(isOnline) FROM adminlist WHERE isOnline = 1");
        $res = mysqli_fetch_array($status);
        if ($res[0] != 0) {
            $online = 1;
            echo '<script>console.log ("client is online");</script>';
        } else if ($res[0] == 0) {
            $online = 0;
            echo '<script>console.log ("client is offline");</script>';
        } else {
            echo '<script>console.log ("error");</script>';
        }
        ?>
        <!--检测IP-->
        <script src="http://pv.sohu.com/cityjson?ie=utf-8">
        </script>
        <script type="text/javascript">
            //console.log(returnCitySN["cip"] + ',' + returnCitySN["cname"]);
            var ip_client = returnCitySN["cip"];
        </script>
        <!--另一种通过php检测ip的方法-->
        <?php
        require_once 'IP.php';
        require_once 'config.php';
        ?>
        <script>
            var ip_local = "<?php echo $ip_local; ?>";
            var online = "<?php echo $online; ?>";
            var server_ip = "<?php echo $server_ip; ?>";
            var server_port = "<?php echo $server_port; ?>";
        </script>

        <!--客服人工回复-->
        <script src="js/jquery-1.10.2.min.js"></script>
        <script src="js/socket.js"></script>
        <script src="js/home.chat.io.js">
        </script>
        <!--客服人工回复部分结束-->
        <script>
            //        $(window).unload(function () {
            //            window.alert("获取到了页面要关闭的事件了！");
            //        });
            //        $(window).bind('beforeunload', function () {
            //            window.alert("hehe");
            //            console.log("hehe???");
            //            //socket.emit("client onload", "...");
            //        });
            //$(".chatBox-content-demo").append("<div class='author-name'><small class='chat-date'>以下是历史消息</small></div>");
<?php
require 'reload_chat_history.php';

foreach ($arrs as $arr) {
    //print_r ($arr);
    //echo '<br>';
    if ($arr['others'] == 'reply') {
        //echo '<script>reply ("' + $msg + '");</script>'; <= ne marche pas
        ?>

                    reply("<?php echo $arr['msg']; ?>");

    <?php } else { ?>

                    repeatClientMsg("<?php echo $arr['msg']; ?>");

        <?php
    }
}
?>

            $(".chatBox-content-demo").append("<div class='author-name'><small class='chat-date'><?php echo $GLOBALS['L']['chat_history'] ?></small></div>");
            $(document).ready(function () {
                $("#chatBox-content-demo").scrollTop($("#chatBox-content-demo")[0].scrollHeight);
            });
        </script>

        <script src="js/jquery.min.js"></script>
        <script src="js/jquery-migrate-3.0.1.min.js"></script>
        <script src="js/popper.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/jquery.easing.1.3.js"></script>
        <script src="js/jquery.waypoints.min.js"></script>
        <script src="js/jquery.stellar.min.js"></script>
        <script src="js/owl.carousel.min.js"></script>
        <script src="js/jquery.magnific-popup.min.js"></script>
        <script src="js/aos.js"></script>
        <script src="js/jquery.animateNumber.min.js"></script>
        <script src="js/bootstrap-datepicker.js"></script>
        <script src="js/jquery.timepicker.min.js"></script>
        <script src="js/scrollax.min.js"></script>
        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
        <script src="js/google-map.js"></script>
        <script src="js/main.js"></script>

    </body>

</html>