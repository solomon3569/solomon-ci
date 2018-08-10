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
                        <h1><?=$this->lang->line('Register'); ?></h1>
                    </div>
                    <?= form_open() ?>
                        <div class="form-group">
                            <label for="username"><?=$this->lang->line('username-name'); ?></label>
                            <input type="text" class="form-control" id="username" name="username" placeholder="<?=$this->lang->line('username-tip'); ?>">
                            <p class="help-block"><?=$this->lang->line('username-hint'); ?></p>
                        </div>
                        <div class="form-group">
                            <label for="email"><?=$this->lang->line('email'); ?></label>
                            <input type="email" class="form-control" id="email" name="email" placeholder="<?=$this->lang->line('email-tip'); ?>">
                            <p class="help-block"><?=$this->lang->line('email-hint'); ?></p>
                        </div>
                        <div class="form-group">
                            <label for="password"><?=$this->lang->line('password'); ?></label>
                            <input type="password" class="form-control" id="password" name="password" placeholder="<?=$this->lang->line('password-tip'); ?>">
                            <p class="help-block"><?=$this->lang->line('password-hint'); ?></p>
                        </div>
                        <div class="form-group">
                            <label for="password_confirm"><?=$this->lang->line('confirm-Password'); ?></label>
                            <input type="password" class="form-control" id="password_confirm" name="password_confirm" placeholder="<?=$this->lang->line('confirm-Password-tip'); ?>">
                            <p class="help-block"><?=$this->lang->line('confirm-Password-hint'); ?></p>
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

