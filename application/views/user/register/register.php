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
                <div class="col-md-12 font_text_title_content">
                    <div class="page-header">
                        <h1>Register</h1>
                    </div>
                    <?= form_open() ?>
                        <div class="form-group">
                            <label for="username">Username</label>
                            <input type="text" class="form-control" id="username" name="username" placeholder="Enter a username">
                            <p class="help-block">At least 4 characters, letters or numbers only</p>
                        </div>
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" class="form-control" id="email" name="email" placeholder="Enter your email">
                            <p class="help-block">A valid email address</p>
                        </div>
                        <div class="form-group">
                            <label for="password">Password</label>
                            <input type="password" class="form-control" id="password" name="password" placeholder="Enter a password">
                            <p class="help-block">At least 6 characters</p>
                        </div>
                        <div class="form-group">
                            <label for="password_confirm">Confirm password</label>
                            <input type="password" class="form-control" id="password_confirm" name="password_confirm" placeholder="Confirm your password">
                            <p class="help-block">Must match your password</p>
                        </div>
                        <div class="form-group">
                            <input type="submit" class="btn btn-default" value="Register">
                        </div>
                </div>
            </div><!-- .row -->
        </div>
    </main><!-- #site-content -->
    <?php include APPPATH . 'views/footer.php'?>
</body>
</html>

