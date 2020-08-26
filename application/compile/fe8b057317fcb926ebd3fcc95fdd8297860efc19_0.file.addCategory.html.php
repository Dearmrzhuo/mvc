<?php
/* Smarty version 3.1.34-dev-7, created on 2020-08-26 08:39:44
  from 'D:\server\server\laomeng\8.20mvcback\mvc\application\template\admin\addCategory.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f461fd06fcaa5_55581730',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'fe8b057317fcb926ebd3fcc95fdd8297860efc19' => 
    array (
      0 => 'D:\\server\\server\\laomeng\\8.20mvcback\\mvc\\application\\template\\admin\\addCategory.html',
      1 => 1598428899,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f461fd06fcaa5_55581730 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="<?php echo CSS_ADD;?>
bootstrap.css">
    <link rel="stylesheet" href="<?php echo CSS_ADD;?>
admin/addCategory.css">
</head>

<body>
    <div class="table-con">
        <h1 class="table-title">栏目信息</h1>
        <form action="<?php echo ENTRY_ADD;?>
/admin/category/addCategory" style="margin-bottom: 10px; margin-top: 20px;"
            method="post">
            <div class="form-group">
                <label for="cname">一级栏目名称</label>
                <input type="text" class="form-control" placeholder="添加一级栏目" name="cname">
            </div>
            <div class="form-group">
                <label for="isshow">导航可见</label>
                <select name="isshow" id="isshow" class="form-control">
                    <option value="1">在导航可见</option>
                    <option value="0">在导航不可见</option>
                </select>
            </div>
            <div class="form-group">
                <label for="cname">对应模板</label>
                <input type="text" class="form-control" placeholder="添加一级栏目" name="tpl_name">
            </div>
            <div class="form-group">
                <label for="info">栏目描述</label>
                <textarea name="info" id="info" class="form-control" rows="4"></textarea>
            </div>
            <input type="submit" class="btn btn-block" value="添加">
        </form>
    </div>

</body>

</html><?php }
}
