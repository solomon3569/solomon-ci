<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="zh-tw">
<head>
    <title>Solomon's website for Codeigniter</title>
    <?php include APPPATH . 'views/include/lib_header.php'?>
</head>
<body class="font_family">
    <div class="tmp_page">
        <?php //vd_test(); ?>

        <div class="body_positon main_bkg_color">
            <?php include APPPATH . 'views/header.php'?>

            <div class="container-fluid intro_bkg_me">
                <img src="/assets/mypage/img/intro_me.JPG" class="intro_me_bkg" alt="head_logo">
                <div class="intro_text_bkg">
                    <span class="font_text_title">Solomon Chung</span>
                    <span class="font_text">E-mail: silvermoon3569@gamil.com</span>
                </div>
            </div>
            <div class="container-fluid introduction-img intro_bkg">
                <div class="introduce_text_bkg_fr">
                    <span class="font_text_title">Introduce Myself</span>
                    <span class="introduce_text_font_text">
                        　　成為PHP網頁工程師，迄今有1年的工作經驗。我使用PHP MySQL和JS完成資料輸出和事件功能，使用HTML CSS 和JS完成頁面展示和頁面效果，有效運用上述語言特性，在MVC架構下，完成交付的任務。從中透過良好的溝通模式與積極互助的團隊工作模式，有效完善團隊任務及企畫需求。
                    </span>
                    <span class="introduce_text_font_text introduce_text_des">
                        我擅長<br>
                        1.後端工程語法: PHP, MySQL. <br>
                        2.前端工程語法: JS, HTML, Sass. <br>
                        3.Jquery AJAX 前後端介接。 <br>
                        4.Framework: CodeIgniter, Laravel. <br>
                        5.HTTP Server: Apache和Nginx使用及設定。 <br>
                        6.Ubuntu Linux 基礎指令操作。 <br>
                        7.Git 版本控制。 <br>
                        8.使用Amazon AWS EC2架設網站。 <br>
                    </span>
                </div>
            </div>
            <div class="container-fluid member-img intro_bkg">
                <a href="javascript:void(0);" class="intro_hover_text intro_text_btn">
                    <div class="intro_text_btn font_text_title introduce_text_bkg">
                        <i class="far fa-user" aria-hidden="true"></i><span class="member_text_position into_underline">Member Management</span>
                    </div>
                </a>
            </div>
            <div class="container-fluid message-img intro_bkg">
                <a href="javascript:void(0);" class="intro_hover_text intro_text_btn">
                    <div class="intro_text_btn font_text_title introduce_text_bkg">
                        <i class="fas fa-pencil-alt" aria-hidden="true"></i><span class="member_text_position into_underline">Sign In</span>
                    </div>
                </a>
            </div>
            <div class="container-fluid shoppingcart-img intro_bkg">
                <a href="javascript:void(0);" class="intro_hover_text intro_text_btn">
                    <div class="intro_text_btn font_text_title introduce_text_bkg">
                        <i class="fas fa-shopping-cart" aria-hidden="true"></i><span class="member_text_position into_underline">Shopping Cart</span>
                    </div>
                </a>
            </div>
            <div class="container-fluid chatroom-img intro_bkg">
                <a href="javascript:void(0);" class="intro_hover_text intro_text_btn">
                    <div class="intro_text_btn font_text_title introduce_text_bkg">
                        <i class="far fa-comments" aria-hidden="true"></i><span class="member_text_position into_underline">Chat Room</span>
                    </div>
                </a>
            </div>
            <div class="container-fluid pinterest_show-img intro_bkg">
                <a href="javascript:void(0);" class="intro_hover_text intro_text_btn">
                    <div class="intro_text_btn font_text_title introduce_text_bkg">
                        <i class="fab fa-pinterest" aria-hidden="true"></i><span class="member_text_position into_underline">Pinterest</span>
                    </div>
                </a>
            </div>
            <div class="container-fluid google_map-img intro_bkg">
                <a href="javascript:void(0);" class="intro_hover_text intro_text_btn">
                    <div class="intro_text_btn font_text_title introduce_text_bkg">
                        <i class="fas fa-map-marker" aria-hidden="true"></i><span class="member_text_position into_underline">Google Map</span>
                    </div>
                </a>
            </div>
            <div class="container-fluid facebook_show-img intro_bkg">
                <a href="javascript:void(0);" class="intro_hover_text intro_text_btn">
                    <div class="intro_text_btn font_text_title introduce_text_bkg">
                        <i class="fab fa-facebook-f" aria-hidden="true"></i>
                        <span class="member_text_position into_underline">Facebook</span>
                    </div>
                </a>
            </div>
        </div>
    </div>
    <?php include APPPATH . 'views/footer.php'?>
</body>
</html>
