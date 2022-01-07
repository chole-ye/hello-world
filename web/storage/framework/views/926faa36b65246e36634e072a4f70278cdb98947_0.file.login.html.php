<?php
/* Smarty version 3.1.36, created on 2020-11-06 10:43:32
  from 'D:\PHPTutorial\WWW\web\resources\views\admin\login.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_5fa528d44f9399_15634032',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '926faa36b65246e36634e072a4f70278cdb98947' => 
    array (
      0 => 'D:\\PHPTutorial\\WWW\\web\\resources\\views\\admin\\login.html',
      1 => 1604928039,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5fa528d44f9399_15634032 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/static/common/twitter-bootstrap/3.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="/static/common/toastr.js/2.1.4/toastr.min.css">
    <link rel="stylesheet" href="/static/admin/css/main.css">
    <?php echo '<script'; ?>
 src="/static/common/jquery/1.12.4/jquery.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="/static/common/twitter-bootstrap/3.4.1/js/bootstrap.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="/static/common/toastr.js/2.1.4/toastr.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="/static/admin/js/main.js"><?php echo '</script'; ?>
>
    <title>内容管理系统</title>
</head>
<body class="login">
    <div class="container">
        <!-- 等待的代码 -->
        <div class="main-loading" style="display: none;">
            <div class="dot-carousel"></div>
        </div>
        <form action="/index.php/admin/login/login" method="POST" class="j-login">
        <h1>陈泳羽内容管理系统</h1>
        <div class="form-group">
            <input type="text" name="username" class="form-control" placeholder="用户名" required>
        </div>
        <div class="form-group">
            <input type="password" name="password" class="form-control" placeholder="密码" required>
        </div>
        <div class="form-group">
            <input type="text" name="captcha" class="form-control" placeholder="验证码" required>
        </div>
        <div class="form-group">
            <div class="login-captcha">
                <img src="/index.php/admin/login/captcha" alt="captcha" title="单击更换"></img>
            </div>        
        </div>
        <div class="form-group">
            <input type="submit" class="btn btn-lg btn-success" value="登录">
        </div>
        </form>
    </div>
    <?php echo '<script'; ?>
>
        //js代码
        main.ajaxForm('.j-login',function(){
            location.href = '/index.php/admin/index/index';
        },function(){
            $('.login-captcha img').click();
        });

        $('.login-captcha img').click(function(){
            $(this).attr('src','/index.php/admin/login/captcha?_='+Math.random());
        })
    <?php echo '</script'; ?>
>
</body>
</html><?php }
}
