<?php
/* Smarty version 3.1.34-dev-7, created on 2020-08-26 07:30:29
  from 'D:\server\server\laomeng\8.20mvcback\mvc\application\template\admin\index.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f460f95532a28_44751840',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd3120142d885039190de09ef014a6c1f1182c77a' => 
    array (
      0 => 'D:\\server\\server\\laomeng\\8.20mvcback\\mvc\\application\\template\\admin\\index.html',
      1 => 1598427027,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f460f95532a28_44751840 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="<?php echo CSS_ADD;?>
admin/index.css">
    <?php echo '<script'; ?>
 src="<?php echo JS_ADD;?>
jquerymini.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo JS_ADD;?>
admin/index.js"><?php echo '</script'; ?>
>

</head>
<header class="header-con">
    <h1 class="h-title">欢迎来到管理系统</h1>
    <div class="h-loginMess">
        <span>用户:<?php echo $_smarty_tpl->tpl_vars['uname']->value;?>
,</span>
        <a href="<?php echo ENTRY_ADD;?>
/admin/index/exitLogin" style="color: gold; cursor: pointer;">退出登录</a>
    </div>
</header>
<div class="decoration">
</div>
<div class="nav-con">
    <ul class="nav-list">
        <li class="nav-list-menu">
            <div class="n-list-title n-user">用户管理</div>
        </li>
        <li class="nav-list-menu">
            <div class="n-list-title n-log">日志管理</div>
        </li>
        <li class="nav-list-menu">
            <div class="n-list-title n-lanmu">栏目管理</div>
        </li>
        <li class="nav-list-menu">
            <div class="n-list-title n-content">内容管理</div>
        </li>
        <li class="nav-list-menu">
            <div class="n-list-title n-project">项目管理</div>
        </li>
    </ul>
</div>
<div class="decoration">
</div>
<main class="main-con">
    <iframe src="" frameborder="0" name="main"></iframe>
    <div class="bottom">
        <div class="bto-title">XXX版权信息&nbsp&nbsp&nbsp&nbspXX制作&nbsp&nbsp&nbsp&nbsp联系电话：XXX-XX-XXXXXXX</div>
    </div>
</main>
<div class="side s-user">
    <div class="s-title ">
        用户管理
    </div>
    <div class="s-title1">
        <a href="<?php echo ENTRY_ADD;?>
/admin/index/addUser" target="main"> 添加用户</a>
    </div>
    <div class="s-title1">
        删除用户
    </div>
    <div class="s-title1">
        <a href="<?php echo ENTRY_ADD;?>
/admin/index/editUser" target="main">修改用户信息</a>
    </div>
</div>
<div class="side s-log">
    <div class="s-title ">
        日志管理
    </div>
    <div class="s-title1">
        添加日志
    </div>
    <div class="s-title1">
        删除日志
    </div>
    <div class="s-title1">
        修改日志信息
    </div>
</div>
<div class="side s-lanmu">
    <div class="s-title ">
        栏目管理
    </div>
    <div class="s-title1">
        <a href="<?php echo ENTRY_ADD;?>
/admin/category" target="main">查看栏目</a>
    </div>
    <div class="s-title1">
        <a href="<?php echo ENTRY_ADD;?>
/admin/category/addpage" target="main">添加栏目</a>
    </div>
    <div class="s-title1">
        <a href="<?php echo ENTRY_ADD;?>
/admin/category/editCategory" target="main">修改栏目</a>
    </div>
</div>

<div class="side s-project">
    <div class="s-title ">
        项目管理
    </div>
    <div class="s-title1">
        添加项目
    </div>
    <div class="s-title1">
        删除项目
    </div>
    <div class="s-title1">
        修改项目信息
    </div>
</div>
<div class="side s-content">
    <div class="s-title ">
        内容管理
    </div>
    <div class="s-title1">
        <a href="<?php echo ENTRY_ADD;?>
/admin/content/add" target="main">添加内容</a>
    </div>
    <div class="s-title1">
        <a href="<?php echo ENTRY_ADD;?>
/admin/content/showList" target="main">查看信息列表</a>
    </div>
</div>

<body>

</body>

</html><?php }
}
