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
                <?php if (validation_errors()) : ?>
                    <div class="col-md-12">
                        <div class="alert alert-danger" role="alert">
                            <?= validation_errors() ?>
                        </div>
                    </div>
                <?php endif; ?>
                <?php if (isset($error)) : ?>
                    <div class="col-md-12">
                        <div class="alert alert-danger" role="alert">
                            <?= $error ?>
                        </div>
                    </div>
                <?php endif; ?>
                <div class="col-md-12">
                    <div class="page-header font_text_title_content">
                        <h1>Login</h1>
                    </div>
                    <?= form_open() ?>
                    <div class="form-group font_text_content">
                        <label for="username"><?=$this->lang->line('username'); ?></label>
                        <input type="text" class="form-control" id="username" name="username" placeholder="Your username">
                    </div>
                    <div class="form-group font_text_content">
                        <label for="password"><?=$this->lang->line('password'); ?></label>
                        <input type="password" class="form-control" id="password" name="password" placeholder="Your password">
                    </div>
                    <div class="form-group">
                        <input type="submit" class="btn btn-default" value="Login">
                    </div>
                </div>
            </div><!-- .row -->
        </div><!-- .container -->
    </main><!-- #site-content -->
    <?php include APPPATH . 'views/footer.php'?>
</body>
</html>