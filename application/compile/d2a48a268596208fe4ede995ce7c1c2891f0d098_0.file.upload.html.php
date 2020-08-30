<?php
/* Smarty version 3.1.34-dev-7, created on 2020-08-27 09:49:33
  from 'D:\server\server\laomeng\8.20mvcback\mvc\application\template\admin\upload.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f4781ad76e535_68490128',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd2a48a268596208fe4ede995ce7c1c2891f0d098' => 
    array (
      0 => 'D:\\server\\server\\laomeng\\8.20mvcback\\mvc\\application\\template\\admin\\upload.html',
      1 => 1598521767,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f4781ad76e535_68490128 (Smarty_Internal_Template $_smarty_tpl) {
?><!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="<?php echo CSS_ADD;?>
bootstrap.css">
    <title>Document</title>
</head>
<body style="background:#E7E7E7;">
<div class="input-append">
<form action="<?php echo ENTRY_ADD;?>
/admin/category/uploadfile" method="post" enctype="multipart/form-data">
    <input type="file" name="file" class="btn">
    <input type="submit" class="btn btn-danger" value="上传">
</form>
</div>
</body>
</html><?php }
}
