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
    <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar ftco-navbar-light" id="ftco-navbar">
        <div class="container">
            <a id="aLogo" href="index.php"><img src="images/title.png" id="imgLogo" class="Accueil"></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="oi oi-menu">Menu</span>
            </button>


            <div class="collapse navbar-collapse" id="ftco-nav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item active"><a href="index.php" class="nav-link"><?php echo $GLOBALS['L']['menu_index'] ?></a></li>
                    <li class="nav-item"><a href="presentation.php" class="nav-link"><?php echo $GLOBALS['L']['menu_presentation'] ?></a></li>
                    <li class="nav-item"><a href="produits.php" class="nav-link"><?php echo $GLOBALS['L']['menu_product'] ?></a></li>
                    <li class="nav-item"><a class="nav-link" href="QRShop.php"><?php echo $GLOBALS['L']['menu_qrshop'] ?></a></li>
                    <li class="nav-item"><a href="NosClients.php" class="nav-link"><?php echo $GLOBALS['L']['menu_customer'] ?></a></li>
                    <li class="nav-item"><a href="contact.php" class="nav-link"><?php echo $GLOBALS['L']['menu_contact'] ?></a></li>
                    <li class="nav-item cta"><a href="#devis" class="nav-link" data-toggle="modal" data-target="#modalRequest"><?php echo $GLOBALS['L']['menu_budget'] ?></a></li>
                    &nbsp; &nbsp; &nbsp; &nbsp;
                    <li class="nav-item cta"><a class="nav-link" href="javascript:void(0);" onclick="changeLang()">中文/Fr</a></li>
                </ul>
            </div>

        </div>
    </nav>
    <!-- END nav-->

    <!--banner,轮播图部分-->
    <div class="hero-wrap" style="margin-top:70px">
        <div class="overlay"></div>
        <div class="container-fluid">
            <div class="slider-text d-md-flex align-items-center" data-scrollax-parent="true">
                <div class="one-forth ftco-animate align-self-md-center" data-scrollax=" properties: { translateY: '70%' }">
                    <h1 class="mb-4"> <?php echo $GLOBALS['L']['ad_cashier'] ?>
                        <span class="wrap"></span>
                    </h1>
                    <!--FR-->
                    <h1 class="mb-4" id="banner_fr">
                        <strong class="typewrite" data-period="4000" data-type='[ "facilite votre vie", "économise votre temps", "augmente vos CA" ]'>
                            <span class="wrap"></span>
                        </strong>
                    </h1>
                    <!--CN-->
                    <h1 class="mb-4" id="banner_ch">
                        <strong class="typewrite" data-period="4000" data-type='[ "提高效率", "增加客流量", "提升营业额" ]'>
                            <span class="wrap"></span>
                        </strong>
                    </h1>
                    <p class="mb-md-5 mb-sm-3" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">
                        <?php echo $GLOBALS['L']['ad_cashier_4'] ?></p>
                    <p data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">
                        <a href="#devis" class="btn btn-primary px-4 py-3 mt-3"><?php echo $GLOBALS['L']['button_budget'] ?></a>
                        <a href="#product" class="btn btn-primary btn-outline-primary px-4 py-3 mt-3"><?php echo $GLOBALS['L']['button_product'] ?></a>
                    </p>
                </div>
                <div class="one-half align-self-md-end align-self-sm-center">
                    <div class="slider-carousel owl-carousel">
                        <div class="item">
                            <img src="images/dashboard_full_3.png" class="img-fluid img" alt="">
                        </div>
                        <div class="item">
                            <img src="images/dashboard_full_4.png" class="img-fluid img" alt="">
                        </div>
                        <div class="item">
                            <img src="images/dashboard_full_5.png" class="img-fluid img" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--banner部分结束-->
    <!--分割线-->
    <section class="ftco-section ftco-section-2">
        <div class="overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <h3 class="heading-white"><?php echo $GLOBALS['L']['banners_service'] ?></h3>
                </div>
            </div>
        </div>
    </section>
    <!--分割线结束-->

    <!--三点优势部分-->
    <section class="ftco-section ftco-services">
        <div class="mt-5">
            <div class="row d-flex no-gutters">
                <div class="col-md-6 col-0 img ftco-animate" style="background-image: url(images/about.jpg);">
                </div>
                <div class="col-md-6 col-12 d-flex">
                    <div class="services-wrap">
                        <div class="heading-section mb-5 ftco-animate">
                            <h2 class="mb-2"><?php echo $GLOBALS['L']['why_chose_us'] ?></h2>
                            <span class="subheading"><?php echo $GLOBALS['L']['why_chose_us_1'] ?></span>
                        </div>
                        <div class="list-services d-flex ftco-animate">
                            <div class="icon d-flex justify-content-center align-items-center">
                                <span><img id="imgIcon1" class="icon" src="images/nf515.png"></span>
                            </div>
                            <div class="text">
                                <h3><?php echo $GLOBALS['L']['our_software'] ?></h3>
                                <p><?php echo $GLOBALS['L']['our_software_1'] ?></p>
                            </div>
                        </div>
                        <div class="list-services d-flex ftco-animate">
                            <div class="icon d-flex justify-content-center align-items-center">
                                <span><img id="imgIcon2" class="icon" src="images/client.png"></span>
                            </div>
                            <div class="text">
                                <h3><?php echo $GLOBALS['L']['our_equipment'] ?></h3>
                                <p><?php echo $GLOBALS['L']['our_equipment_1'] ?></p>
                            </div>
                        </div>
                        <div class="list-services d-flex ftco-animate">
                            <div class="icon d-flex justify-content-center align-items-center">
                                <span><img id="imgIcon3" class="icon" src="images/service.png"></span>
                            </div>
                            <div class="text">
                                <h3><?php echo $GLOBALS['L']['our_service'] ?></h3>
                                <p><?php echo $GLOBALS['L']['our_service_1'] ?></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--三点优势部分结束-->
    <!--分割线-->
    <section class="ftco-section ftco-counter img" id="section-counter" style="background-image: url(images/bg_1.jpg);" data-stellar-background-ratio="0.5">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-11">
                    <div class="row">
                        <!-- bootstrap 4.0删除了col-xs（极小）,用col-*代替！ -->
                        <div class="col-md-3 col-sm-6 col-6 d-flex justify-content-center counter-wrap ftco-animate">
                            <div class="block-18 text-center">
                                <div class="text">
                                    <strong class="number" data-number="2">0</strong>
                                    <span><?php echo $GLOBALS['L']['banners_agency'] ?></span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6 col-6 d-flex justify-content-center counter-wrap ftco-animate">
                            <div class="block-18 text-center">
                                <div class="text">
                                    <strong class="number" data-number="1500">0</strong>
                                    <span><?php echo $GLOBALS['L']['banners_shop'] ?></span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6 col-6 d-flex justify-content-center counter-wrap ftco-animate">
                            <div class="block-18 text-center">
                                <div class="text">
                                    <strong class="number" data-number="6">0</strong>
                                    <span><?php echo $GLOBALS['L']['banners_experience'] ?></span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6 col-6 d-flex justify-content-center counter-wrap ftco-animate">
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
    <!--分割线部分结束-->

    <!--陈列产品部分-->
    <section class="ftco-section" id="product">
        <div class="container-fluid">
            <div class="row justify-content-center mb-5 pb-5">
                <div class="col-md-7 text-center heading-section ftco-animate">
                    <h2 class="mb-2"><?php echo $GLOBALS['L']['equipment_exhibition'] ?></h2>
                    <span class="subheading"><?php echo $GLOBALS['L']['equipment_exhibition_1'] ?></span>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 col-12 ftco-animate">
                    <div class="work-entry">
                        <a id="product1_img" data-toggle="modal" data-target="#product1" class="img" style="background-image: url(images/work1.png);">
                            <div class="text d-flex justify-content-center align-items-center">
                                <div class="p-3">
                                    <h3 id="product1_title"><?php echo $GLOBALS['L']['equipment_cashier'] ?></h3>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-md-4 col-12 ftco-animate">
                    <div class="work-entry">
                        <a id="product2_img" data-toggle="modal" data-target="#product2" class="img" style="background-image: url(images/work2.png);">
                            <div class="text d-flex justify-content-center align-items-center">
                                <div class="p-3">
                                    <h3 id="product2_title"><?php echo $GLOBALS['L']['equipment_pad'] ?></h3>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-md-4 col-12 ftco-animate">
                    <div class="work-entry">
                        <a id="product3_img" data-toggle="modal" data-target="#product3" class="img" style="background-image: url(images/work3.png);">
                            <div class="text d-flex justify-content-center align-items-center">
                                <div class="p-3">
                                    <h3 id="product3_title"><?php echo $GLOBALS['L']['equipment_phone'] ?></h3>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--产品部分结束-->

    <!--Devis部分-->
    <section class="ftco-section bg-light" id="devis">
        <!-- 加上container-fluid页面不超出 -->
        <div class="container-fluid">
            <div class="row justify-content-center mb-5 pb-5">
                <div class="col-md-7 text-center heading-section ftco-animate">
                    <h2 class="mb-2"><?php echo $GLOBALS['L']['budget_online'] ?></h2>
                    <span class="subheading"><?php echo $GLOBALS['L']['budget_online_1'] ?></span>
                </div>
            </div>
        </div>
        <section class="ftco-section ftco-counter img" style="background-image: url(images/bg_1.jpg);" data-stellar-background-ratio="0.5">
            <div id="beforeSubmit">
                <!-- 设置空的target阻止默认提交表单以后刷新 -->
                <form id="formDevis" class="row" style="text-align:center; margin-left:20px; margin-right:20px" method="post" action="storeDevis.php" target="nm_iframe">
                    <div class="colForm col-lg-4 col-md-6 col-sm-12 col-12">
                        <div id="pricingTable1" class="pricing-table">
                            <h3><?php echo $GLOBALS['L']['main_product'] ?></h3>
                            <HR>
                            <div class="form-group">
                                <!-- 这里设置的value值是php Post到的值，不设置默认显示on -->
                                <input type="radio" id="radio1" name="radio" value="Caisse et logiciel" checked>
                                <label class="circle" for="radio1">
                                    <?php echo $GLOBALS['L']['main_product_cashier'] ?></label>
                                <HR>
                                <input type="radio" id="radio2" name="radio" value="Tablette et logiciel">
                                <label class="circle" for="radio2">
                                    <?php echo $GLOBALS['L']['main_product_pad'] ?></label>
                                <HR>
                                <input type="radio" id="radio3" name="radio" value="Logiciel">
                                <label class="circle" for="radio3">
                                    <?php echo $GLOBALS['L']['main_product_software'] ?></label>
                            </div>
                        </div>
                        </br>
                    </div>
                    <div class="colForm col-lg-4 col-md-6 col-sm-12 col-12">
                        <div class="pricing-table">
                            <h3><?php echo $GLOBALS['L']['other_product'] ?></h3>
                            <HR>
                            <div class="form-group">
                                <!-- php name后面必须加[] -->
                                <input name="checkbox[]" value="Smartphone" type="checkbox" id="checkbox1">
                                <label class="circle" for="checkbox1">
                                    <?php echo $GLOBALS['L']['other_product_phone'] ?></label>
                                <HR>
                                <input name="checkbox[]" value="Imprimante" type="checkbox" id="checkbox2">
                                <label class="circle" for="checkbox2">
                                    <?php echo $GLOBALS['L']['other_product_printer'] ?></label>
                                <HR>
                                <input name="checkbox[]" value="Tiroir" type="checkbox" id="checkbox3">
                                <label class="circle" for="checkbox3">
                                    <?php echo $GLOBALS['L']['other_product_cashbox'] ?></label>
                                <HR>
                                <input name="checkbox[]" value="Balance" type="checkbox" id="checkbox4">
                                <label class="circle" for="checkbox4">
                                    <?php echo $GLOBALS['L']['other_product_scales'] ?></label>
                                <HR>
                                <input name="checkbox[]" value="Scanneur" type="checkbox" id="checkbox5">
                                <label class="circle" for="checkbox5">
                                    <?php echo $GLOBALS['L']['other_product_scanner'] ?></label>
                                <HR>
                                <input name="checkbox[]" value="Ecran de client" type="checkbox" id="checkbox6">
                                <label class="circle" for="checkbox6">
                                    <?php echo $GLOBALS['L']['other_product_guestscreen'] ?></label>
                                <HR>
                                <input name="checkbox[]" value="Conseillez-moi" type="checkbox" id="checkbox7">
                                <label class="circle" for="checkbox7">
                                    <?php echo $GLOBALS['L']['other_product_advice'] ?></label>
                            </div>
                        </div>
                        </br>
                    </div>
                    <div class="colForm col-lg-4 col-md-6 col-sm-12 col-12">
                        <div class="pricing-table">
                            <h3><?php echo $GLOBALS['L']['budget_info'] ?></h3>
                            <HR>
                            <div class="row">
                                <div class="col-sm-1"></div>
                                <div class="col-sm-10">
                                    <input type="text" name="company" class="form-control" id="company" placeholder=<?php echo $GLOBALS['L']['budget_info_company'] ?> required="required">
                                </div>
                            </div>
                            </br>
                            <div class="row">
                                <div class="col-sm-1"></div>
                                <div class="col-sm-10">
                                    <input type="email" name="email" class="form-control" id="email" placeholder=<?php echo $GLOBALS['L']['budget_info_email'] ?> required="required">
                                </div>
                            </div>
                            </br>
                            <div class="row">
                                <div class="col-sm-1"></div>
                                <div class="col-sm-10">
                                    <input type="text" name="telephone" class="form-control" id="telephone" placeholder=<?php echo $GLOBALS['L']['budget_info_phone'] ?> required="required">
                                </div>
                            </div>
                            </br>
                            <div class="row">
                                <div class="col-sm-1"></div>
                                <div class="col-sm-10">
                                    <input type="text" name="postcode" class="form-control" id="postcode" placeholder=<?php echo $GLOBALS['L']['budget_info_postcode'] ?> required="required">
                                </div>
                            </div>
                            </br>
                            <div class="row">
                                <div class="col-sm-1"></div>
                                <div class="col-sm-10">
                                    <input type="text" name="address" class="form-control" id="address" placeholder=<?php echo $GLOBALS['L']['budget_info_address'] ?> required="required">
                                </div>
                            </div>
                            </br>
                            <div class="row">
                                <div class="col-sm-1"></div>
                                <div class="col-sm-10">
                                    <textarea rows="3" name="message" class="form-control" id="message" placeholder=<?php echo $GLOBALS['L']['budget_info_message'] ?>></textarea>
                                </div>
                            </div>
                            <div class="actions">
                                </br>
                                <input type="submit" id="getDevis" value=<?php echo $GLOBALS['L']['budget_info_submit'] ?> name="getDevis" class="btn btn-primary px-4 py-2" title="Submit Your Message!" />
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <div id="afterSubmit" class="row container-fluid" style="display: none">
                <div class="colForm col-lg-1"></div>
                <div class="colForm col-lg-8">
                    <div class="pricing-table" style="height:400px;">
                        <div style="text-align:center">
                            <h3>Vous avez soumis avec succès <img src="images/check.png" style="width:50px; height:50px"></h3>
                            <span class="subheading">Nous vous contacterons dès que possible dans les trois jours
                                ouvrables</span>
                            <HR>
                        </div>
                        <div class="row">
                            <div class="col-lg-1"></div>
                            <div class="col-lg-6">
                                <div>
                                    <h5>Produit principal:</h5>
                                    <span id="mainProduct">Produit principal</apan>
                                        <br>
                                        <br>
                                </div>
                                <div>
                                    <h5>Autres produits:</h5>
                                    <span id="otherProduct">Autres produits</apan>
                                </div>
                            </div>
                            <div class="col-lg-5">
                                <h5>Vos informations: </h5>
                                <div style="display:inline">
                                    <b style="">Société: </b>
                                    <span id="companyPrint">Société</span>
                                </div>
                                <br>
                                <div style="display:inline">
                                    <b>Mail: </b>
                                    <span id="mailPrint">Mail</span>
                                </div>
                                <br>
                                <div style="display:inline">
                                    <b>Téléphone: </b>
                                    <span id="telephonePrint">Téléphone</span>
                                </div>
                                <br>
                                <div style="display:inline">
                                    <b>Addresse: </b>
                                    <span id="addressPrint">Adresse</span>
                                </div>
                                <br>
                                <div style="display:inline">
                                    <b>Message: </b>
                                    <span id="messagePrint">Message</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        </div>
    </section>
    <iframe id="id_iframe" name="nm_iframe" style="display:none;"></iframe>
    <script>
        //提交表单后执行
        $("#formDevis").submit(function() {
            $("#beforeSubmit").hide();
            $("#afterSubmit").show();
            //取单选框的值
            $("#mainProduct").html($("input[name='radio']:checked").val());
            //取复选框的值
            var stringOtherProduct = "";
            var checkbox = document.getElementsByName('checkbox[]');
            $("input[name='checkbox[]']:checked").each(function(i) {
                if ($(this).val() != "Conseillez-moi") {
                    stringOtherProduct = stringOtherProduct + "  " + $(this).val();
                }
            });
            $("#otherProduct").html(stringOtherProduct);
            $("#companyPrint").html($("#company").val());
            $("#mailPrint").html($("#email").val());
            $("#telephonePrint").html($("#telephone").val());
            $("#addressPrint").html($("#address").val());
            $("#messagePrint").html($("#message").val());
        });


        $(window).resize(function() {
            var offsetWid = document.documentElement.clientWidth;
            var offsetHei = document.documentElement.clientHeight;
            if (offsetWid < 450) {
                $("#imgLogo").css({
                    "width": "60%",
                    "height": "60%"
                });
                $("#aLogo").css({
                    "width": offsetWid * 0.5
                });
                // $("#pricingTable1").css({"height":"50%"});
            }
        })

        function watchChangeSize() {
            //可视区的宽/高(DOM)
            var offsetWid = document.documentElement.clientWidth;
            var offsetHei = document.documentElement.clientHeight;
            console.log(offsetWid);
            console.log(offsetHei);
            if (offsetWid < 450) {
                $("#imgLogo").css({
                    "width": "60%",
                    "height": "60%"
                });
                $("#aLogo").css({
                    "width": offsetWid * 0.5
                });
                $("#pricingTable1").css({
                    "height": offsetHei * 0.5
                });
            }
        }
        $(function() {
            watchChangeSize();
            //修改
            //逻辑顺序：没有切语言之前，本地变量localStorage.getItem("lang")没有值，自动读取浏览器语言
            //一旦切换过一次语言，本地保存语言localStorage.getItem("lang")为zh或fr。
            //先看有没有过切换记录，没有就自动识别
            if (localStorage.getItem("lang") == "zh") {
                var lang = "zh-CN";
            } else if (localStorage.getItem("lang") == "fr") {
                var lang = "fr";
            } else {
                var lang = navigator.language;
            }
            if (lang == "zh-CN") {
                document.getElementById("banner_fr").style = "display: none;";
                $.ajax({
                    url: 'changeData.php',
                    type: 'post',
                    data: {
                        table: 'productlist',
                        sql: 'SELECT * FROM productList;'
                    }
                }).done(function(msg) {
                    //php中json转js数组
                    var data_obj = eval(msg);
                    for (var i = 0; i < 3; i++) {
                        var pruductNum = i + 1;
                        $("#product" + pruductNum + "_title").text(data_obj[i].titleCn);
                        document.getElementById("product" + pruductNum + "_img").style.backgroundImage =
                            "url('" + data_obj[i].imageUrl + "')";
                        $("#product" + pruductNum + "Title").text(data_obj[i].titleCn);
                        //.text不能换行，不识别<br>,.html识别
                        $("#product" + pruductNum + "Description").html(data_obj[i].descriptionCn);
                        $("#product" + pruductNum + "Image").attr('src', data_obj[i].imageUrl);
                    }
                });
            } else {
                document.getElementById("banner_ch").style = "display: none;";
                $.ajax({
                    url: 'changeData.php',
                    type: 'post',
                    data: {
                        table: 'productlist',
                        sql: 'SELECT * FROM productList;'
                    }
                }).done(function(msg) {
                    //php中json转js数组
                    var data_obj = eval(msg);
                    for (var i = 0; i < 3; i++) {
                        var pruductNum = i + 1;
                        $("#product" + pruductNum + "_title").text(data_obj[i].title);
                        document.getElementById("product" + pruductNum + "_img").style.backgroundImage =
                            "url('" + data_obj[i].imageUrl + "')";
                        $("#product" + pruductNum + "Title").text(data_obj[i].title);
                        //.text不能换行，不识别<br>,.html识别
                        $("#product" + pruductNum + "Description").html(data_obj[i].description);
                        $("#product" + pruductNum + "Image").attr('src', data_obj[i].imageUrl);
                    }
                });
            }

            $.ajax({
                url: 'changeData.php',
                type: 'post',
                data: {
                    table: 'wechatlist',
                    sql: 'SELECT * FROM wechatList;'
                }
            }).done(function(msg) {
                //php中json转js数组
                var data_obj = eval(msg);
                // alert(data_obj[0]);
                for (var i = 0; i < 2; i++) {
                    var pruductNum = i + 1;
                    $("#tweet" + pruductNum + "_title").text(data_obj[i].title);
                    $("#tweet" + pruductNum + "_title").attr("href", data_obj[i].url);
                    $("#tweet" + pruductNum + "_url").attr("href", data_obj[i].url);
                    $("#tweet" + pruductNum + "_date").text(data_obj[i].reg_time);
                    document.getElementById("tweet" + pruductNum + "_img").style.backgroundImage = "url('" +
                        data_obj[i].imageUrl + "')";
                }
            })
        });
        //修改
        function changeLang() {
            if (localStorage.getItem("lang") != null) {
                if (localStorage.getItem("lang") == "fr") {
                    var language = "zh";
                    localStorage.setItem("lang", language);
                    $.ajax({
                        url: 'changeLang.php',
                        type: 'post',
                        data: {
                            lang: 'zh',
                        },
                        success: function(msg) {
                            location.reload();
                        }
                    });
                    //中文转法语
                } else {
                    var language = "fr";
                    localStorage.setItem("lang", language);
                    $.ajax({
                        url: 'changeLang.php',
                        type: 'post',
                        data: {
                            lang: 'fr',
                        },
                        success: function(msg) {
                            location.reload();
                        }
                    });
                }
            } else {
                //第一次转换
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
    </script>

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
                            <a class="blog-img mr-4" style="background-image: url(images/image_1.jpg);" id="tweet1_img"></a>
                            <div class="text">
                                <h3 class="heading"><a href="#" id="tweet1_title">Even the all-powerful Pointing has no
                                        control about</a></h3>
                                <div class="meta">
                                    <div><a id="tweet1_date"><span class="icon-calendar" id=></span> Sept 15, 2018</a>
                                    </div>
                                    <div><a><span class="icon-person"></span> Admin</a></div>
                                    <div><a><span class="icon-chat"></span> 19</a></div>
                                </div>
                            </div>
                        </div>
                        <div class="block-21 mb-4 d-flex">
                            <a class="blog-img mr-4" style="background-image: url(images/image_2.jpg);" id="tweet2_img"></a>
                            <div class="text">
                                <h3 class="heading"><a href="#" id="tweet2_title">Even the all-powerful Pointing has no
                                        control about</a></h3>
                                <div class="meta">
                                    <div><a id="tweet2_date"><span class="icon-calendar"></span> Sept 15, 2018</a></div>
                                    <div><a><span class="icon-person"></span> Admin</a></div>
                                    <div><a><span class="icon-chat"></span> 19</a></div>
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
                                <li><a><span class="icon icon-map-marker"></span><span class="text">8 avenue Henri
                                            Barbusse, 93000 Bobigny</span></a></li>
                                <li><a><span class="icon icon-phone"></span><span class="text">+33 1 48 46 12
                                            88</span></a></li>
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
    <div id="ftco-loader" class="show fullscreen">
        <svg class="circular" width="48px" height="48px">
            <circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee" />
            <circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00" />
        </svg>
    </div>

    <!--产品图弹窗介绍-->
    <div class="modal fade" id="product1" tabindex="-1" role="dialog" aria-labelledby="modalLabel" style="display:none">
        <!-- 在style文件中设置lg max-height：1200px-->
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 id="product1Title" class="modal-title" id="modalLabel">Weshop</h4>
                </div>
                <div id="_modalDialog_body" class="modal-body">
                    <!--  设置这个div的大小，超出部分显示滚动条 -->
                        <div class="row">
                        <div class="col-md-8 col-12">
                            <img id="product1Image" class="img_product" width="800px" height="auto" src="images/work-1.jpg" alt="work1">
                        </div>
                        <div class="col-md-4 col-12">
                            <h2>Introduction:</h2>
                            <br>
                            <p id="product1Description" style="font-size:20px"></p>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <!--  <button type="submit" class="btn btn-primary">确定</button>-->
                    <button type="button" class="btn btn-default" data-dismiss="modal">Fermer</button>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="product2" tabindex="-1" role="dialog" aria-labelledby="modalLabel" style="display:none">
        <!-- 在style文件中设置lg max-height：1200px-->
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 id="product2Title" class="modal-title" id="modalLabel">Weshop</h4>
                </div>
                <div id="_modalDialog_body" class="modal-body">
                    <!--  设置这个div的大小，超出部分显示滚动条 -->
                    <div class="row">
                        <div class="col-md-8">
                            <img id="product2Image" class="img_product" width="800px" height="530px" src="images/work-2.jpg" alt="work2">
                        </div>
                        <div class="col-md-4">
                            <h2>Introduction:</h2>
                            <br>
                            <p id="product2Description" style="font-size:20px">
                                <p>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <!--<button type="submit" class="btn btn-primary">确定</button>-->
                    <button type="button" class="btn btn-default" data-dismiss="modal">Fermer</button>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="product3" tabindex="-1" role="dialog" aria-labelledby="modalLabel" style="display:none">
        <!-- 在style文件中设置lg max-height：1200px-->
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 id="product3Title" class="modal-title" id="modalLabel">Weshop</h4>
                </div>
                <div id="_modalDialog_body" class="modal-body">
                    <!--  设置这个div的大小，超出部分显示滚动条 -->
                    <div class="row">
                        <div class="col-md-8">
                            <img id="product3Image" class="img_product" width="800px" height="530px" src="images/work-3.jpg" alt="work3">
                        </div>
                        <div class="col-md-4">
                            <h2>Introduction:</h2>
                            <br>
                            <p id="product3Description" style="font-size:20px"></p>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <!--   <button type="submit" class="btn btn-primary">确定</button>-->
                    <button type="button" class="btn btn-default" data-dismiss="modal">Fermer</button>
                </div>
            </div>
        </div>
    </div>
    <!--产品图弹窗部分结束-->

    <!--客服悬浮窗-->
    <div class="livechat-girl animated"> <img class="girl" src="images/en_3.png">
        <div class="livechat-hint rd-notice-tooltip rd-notice-type-success rd-notice-position-left single-line show_hint">
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
        (function($) {
            setInterval(function() {
                if ($(".animated-circles").hasClass("animated")) {
                    $(".animated-circles").removeClass("animated");
                } else {
                    $(".animated-circles").addClass('animated');
                }
            }, 3000);
            var wait = setInterval(function() {
                $(".livechat-hint").removeClass("show_hint").addClass("hide_hint");
                clearInterval(wait);
            }, 4500);
            $(".livechat-girl").hover(function() {
                clearInterval(wait);
                $(".livechat-hint").removeClass("hide_hint").addClass("show_hint");
            }, function() {
                $(".livechat-hint").removeClass("show_hint").addClass("hide_hint");
            }).click(function() {
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
                                <input type="file" onchange="selectImg(this)" accept="image/jpg,image/jpeg,image/png" name="file" id="inputImage" class="hidden">
                                <i class="iconfont icon-tuxiang"></i>
                            </label>
                            <button id="chat-fasong" class="btn-default-styles"><i class="iconfont icon-fasong"></i></button>
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

    <!--客服自动回复对话框JS部分-->
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
                // !import不可覆盖，可以删除
                $(".div-textarea").css("width", 245);
            }
        }
        (window.onresize = function() {
            screenFuc();
        })();
        //未读信息数量为空时
        var totalNum = $(".chat-message-num").html();
        if (totalNum == "") {
            $(".chat-message-num").css("padding", 0);
        }
        $(".message-num").each(function() {
            var wdNum = $(this).html();
            if (wdNum == "") {
                $(this).css("padding", 0);
            }
        });


        $(".chat-close").click(function() {
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
            $(document).ready(function() {
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
        $("#chat-biaoqing").click(function() {
            $(".biaoqing-photo").toggle();
        });
        $(document).click(function() {
            $(".biaoqing-photo").css("display", "none");
        });
        $("#chat-biaoqing").click(function(event) {
            event.stopPropagation(); //阻止事件
        });

        $(".emoji-picker-image").each(function() {
            $(this).click(function() {
                var bq = $(this).parent().html();
                console.log(bq)
                $(".chatBox-content-demo").append("<div class=\"clearfloat\">" +
                    "<div class=\"author-name\"><small class=\"chat-date\" id=\"timenow\"></small> </div> " +
                    "<div class=\"right\"> <div class=\"chat-message\"> " + bq + " </div> " +
                    "<div class=\"chat-avatars\"><img src=\"static/icon00.png\" alt=\"头像\" /></div> </div> </div>"
                );
                //发送后关闭表情框
                $(".biaoqing-photo").toggle();
                //聊天框默认最底部
                $(document).ready(function() {
                    $("#chatBox-content-demo").scrollTop($("#chatBox-content-demo")[0]
                        .scrollHeight);
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
                $(document).ready(function() {
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
            reader.onload = function(evt) {
                var images = evt.target.result;
                $(".chatBox-content-demo").append("<div class=\"clearfloat\">" +
                    "<div class=\"author-name\"><small class=\"chat-date\" id=\"timenow\"></small> </div> " +
                    "<div class=\"right\"> <div class=\"chat-message\"><img src=" + images + "></div> " +
                    "<div class=\"chat-avatars\"><img src=\"static/icon01.png\" alt=\"头像\" /></div> </div> </div>");
                //聊天框默认最底部
                $(document).ready(function() {
                    $("#chatBox-content-demo").scrollTop($("#chatBox-content-demo")[0].scrollHeight);
                });
                document.getElementById('timenow').innerHTML = timenow();
            };

            reader.readAsDataURL(pic.files[0]);

        }
    </script>
    <!--客服自动回复对话框JS部分结束-->

    <!--检测是否有人工在线-->
    <?php
    require_once 'conn.php';
    //$host = '192.168.1.100';
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
        
        <?php
        require 'reload_chat_history.php';

        foreach ($arrs as $arr) {
            if ($arr['others'] == 'reply') {
        ?>
                reply("<?php echo $arr['msg']; ?>");

            <?php } else { ?>

                repeatClientMsg("<?php echo $arr['msg']; ?>");

        <?php
            }
        }
        ?>

        $(".chatBox-content-demo").append("<div class='author-name'><small class='chat-date'><?php echo $GLOBALS['L']['chat_history'] ?></small></div>");
        $(document).ready(function() {
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
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false">
    </script>
    <script src="js/google-map.js"></script>
    <script src="js/main.js"></script>

</body>

</html>