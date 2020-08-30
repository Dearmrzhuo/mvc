<?php
/* Smarty version 3.1.34-dev-7, created on 2020-08-28 09:13:09
  from 'D:\server\server\laomeng\8.20mvcback\mvc\application\template\admin\showList.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f48caa59a5e66_01806540',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2d52729009029a29d70d7f66bf1ec0f95cd23e8e' => 
    array (
      0 => 'D:\\server\\server\\laomeng\\8.20mvcback\\mvc\\application\\template\\admin\\showList.html',
      1 => 1598605890,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f48caa59a5e66_01806540 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="<?php echo BOOT_ADD;?>
">
    <link rel="stylesheet" href="<?php echo CSS_ADD;?>
admin/showList.css">
</head>

<body>
    <div class="table-con">
        <h1 class="table-title">内容信息</h1>
        <form action="<?php echo ENTRY_ADD;?>
/admin/content/showList" class="form-inline" method="post" style="margin-bottom: 10px;">
            <div class="form-group">
                <label for="cid">所属栏目</label>
                <select name="cid" id="cid" class="form-control">

                </select>
            </div>
            <div class="form-group">
                <label for="ctitle">标题关键字</label>
                <input type="text" class="form-control" id ="ctitle" name="ctitle">
             </div>
            <div class="form-group">
                <label for="order">倒序</label>
                <input type="checkbox" class="form-control" id ="order" name="order" value="desc">
            </div>
            <input type="submit" class="btn btn-danger" value="查询">
        </form>
        <table class="table table-bordered table-con1">
            <tr style="font-size: 16px; font-weight: bold; text-align: center;">
                <th style="text-align: center;">所属分类</th>
                <th style="text-align: center;">标题</th>
                <th style="text-align: center;">操作</th>
            </tr>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['data']->value, 'v');
$_smarty_tpl->tpl_vars['v']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->do_else = false;
?>
            <tr>
                <td><?php echo $_smarty_tpl->tpl_vars['v']->value["cname"];?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['v']->value["ctitle"];?>
</td>
                <td>
                    <a href="<?php echo ENTRY_ADD;?>
/admin/content/show?conid=<?php echo $_smarty_tpl->tpl_vars['v']->value['conid'];?>
" class="c-look">查看</a>
                    <a href="<?php echo ENTRY_ADD;?>
/admin/content/editcon?conid=<?php echo $_smarty_tpl->tpl_vars['v']->value['conid'];?>
" class="c-edit">编辑</a>
                    <a href="<?php echo ENTRY_ADD;?>
/admin/content/delcon?conid=<?php echo $_smarty_tpl->tpl_vars['v']->value['conid'];?>
" class="c-del">删除</a>
                </td>
            </tr>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </table>
        <div class="ENTRY_ADD" style="display: none"><?php echo ENTRY_ADD;?>
</div>
    </div>
    <?php echo '<script'; ?>
 src="<?php echo JS_ADD;?>
jquerymini.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo JS_ADD;?>
admin/showList.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo JS_ADD;?>
admin/addcon.js"><?php echo '</script'; ?>
>

</body>

</html><?php }
}
