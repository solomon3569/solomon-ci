<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<!DOCTYPE html>
<html lang="zh-tw">
<head>
    <title>Solomon's website for Codeigniter</title>
    <?php include APPPATH . 'views/include/lib_header.php'?>
</head>
<body class="font_family">
    <?php include APPPATH . 'views/header.php'?>
    <main id="site-content" role="main">
        <?php vd_test(); ?>
        <div class="container">
            <div class="row">
                <div class="col-md-12 font_text_title_content">
                    <div class="page-header">
                        <h1>Thank you for registering your new account!</h1>
                    </div>
                    <p>You have successfully register. Please check your email inbox to confirm your email address.</p>
                </div>
            </div><!-- .row -->
        </div>
    </main><!-- #site-content -->
    <?php include APPPATH . 'views/footer.php'?>
</body>
</html>
