<?php
/* Smarty version 3.1.34-dev-7, created on 2020-08-22 03:36:47
  from 'D:\server\server\laomeng\8.20mvcback\mvc\application\template\admin\admin.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f4092cfb77f49_50532577',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f02b1d6be8b07e587c0edf24d79bd9c2ac6ac940' => 
    array (
      0 => 'D:\\server\\server\\laomeng\\8.20mvcback\\mvc\\application\\template\\admin\\admin.html',
      1 => 1598067404,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f4092cfb77f49_50532577 (Smarty_Internal_Template $_smarty_tpl) {
?><!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="<?php echo CSS_ADD;?>
bootstrap.css">
    <link rel="stylesheet" href="<?php echo CSS_ADD;?>
admin/admin.css">
    <?php echo '<script'; ?>
 src="<?php echo JS_ADD;?>
jquerymini.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo JS_ADD;?>
jquery.validate.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo JS_ADD;?>
admin/admin.js"><?php echo '</script'; ?>
>
    <style>

    </style>
    <title>XX后台管理系统</title>
</head>

<body>
    <?php echo '<script'; ?>
>
        //获取当前的时间
        //var date = new Date();
        //如果不加cookie不加过期时间，默认的是当浏览器打开的时候，关闭浏览器自动删除
        //var time = date.getTime() + 1000;
        //date.setTime(time);
        // domain 可以限制域名
        // document.cookie = "name=zhangsan;expires=" + date.toUTCString() +
        //     ";domain=localhost;path=/server/laomeng/8.20mvcback/mvc/index.php";
        //document.cookie = "name=zhangsan";
    <?php echo '</script'; ?>
>
    <div class="box-con" style="width: 450px;">
        <div style="text-align: center; font-size: 18px;margin-bottom: 10px;">后台管理</div>
        <form class="form-horizontal" action="admin/index/login" method="POST">
            <div class="form-group">
                <label for="inputEmail3" class="col-sm-2 control-label">账号</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="inputEmail3" placeholder="账号" name="uname">
                </div>
            </div>
            <div class="form-group">
                <label for="inputPassword3" class="col-sm-2 control-label">密码</label>
                <div class="col-sm-10">
                    <input type="password" class="form-control" id="inputPassword3" placeholder="Password" name="pass">
                </div>
            </div>
            <div class="form-group">
                <label for="inputPassword3" class="col-sm-2 control-label">验证码</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" style="width: 45%;" id="code" placeholder="验证码"
                        name="code">
                    <img src="http://localhost:81/server/laomeng/8.20mvcback/mvc/index.php/admin/index/mcode"
                        style="position: absolute; right: 20px;top: 0;"
                        onclick="this.src='http://localhost:81/server/laomeng/8.20mvcback/mvc/index.php/admin/index/mcode?'+Math.random()">
                    <span style="position: absolute;top: 100%;">看不清楚？点击图片更换</span>
                </div>
            </div>
            <div class="form-group">
                <div class="col-sm-offset-2 col-sm-10">
                    <div class="checkbox">
                        <label>
                            <input type="checkbox"> 记住密码
                        </label>
                    </div>
                </div>
            </div>
            <div class="form-group">
                <div class="col-sm-offset-2 col-sm-10">
                    <button type="submit" class="btn btn-default" style="margin-left: 0px;">登录</button>
                    <span style="color:gray;">没有账号？请点击</span>
                    <a href="admin/reg/add" class="btn btn-default" style="margin-left: 5px;">注册</a>
                </div>
                <div class="col-sm-offset-2 col-sm-10">

                </div>
            </div>
        </form>
    </div>
</body>

</html><?php }
}
