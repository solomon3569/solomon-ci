<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<header id="site-header">
    <div class="container-fluid header_padding">
        <div class="row align-items-center header_setting">
            <div class="col-4">
                <a href="/mypage" class="header_page_left font_text">
                    Homepage
                </a>
            </div>
            <div class="col font_text_title">
                <span class="flex_center"></span>
            </div>
            <div class="col-4 header_right_align">
                <div class="input-group header_b4">
                    <select class="custom-select" id="lang_choose">
                        <option selected>Language</option>
                        <option value="en">English</option>
                        <option value="cht">Chinese_tw</option>
                        <option value="chs">Chinese_cn</option>
                        <option value="es">Spanish</option>
                    </select>
                </div>
                <?php if (isset($_SESSION['username']) && $_SESSION['logged_in'] === true) : ?>
                    <a href="<?= base_url('logout') ?>" class="header_page_right font_text"> Logout </a>
                <?php else : ?>
                    <a href="<?= base_url('login') ?>" class="header_page_right font_text"> Login </a>
                    <a href="<?= base_url('register') ?>" class="header_page_right font_text"> Register </a>
                <?php endif; ?>
            </div>
        </div>
    </div>
</header><!-- #site-header -->

