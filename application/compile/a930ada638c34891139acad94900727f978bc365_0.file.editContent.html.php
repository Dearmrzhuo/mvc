<?php
/* Smarty version 3.1.34-dev-7, created on 2020-08-26 01:16:02
  from 'D:\server\server\laomeng\8.20mvcback\mvc\application\template\admin\editContent.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f45b7d21f6b09_51319780',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a930ada638c34891139acad94900727f978bc365' => 
    array (
      0 => 'D:\\server\\server\\laomeng\\8.20mvcback\\mvc\\application\\template\\admin\\editContent.html',
      1 => 1598404551,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f45b7d21f6b09_51319780 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="<?php echo BOOT_ADD;?>
">
    <link rel="stylesheet" href="<?php echo CSS_ADD;?>
admin/editContent.css">

</head>

<body>
    <div class="container">
        <form action="<?php echo ENTRY_ADD;?>
/admin/content/editconts" method="POST">
            <div class="form-group">
                <label for="cid">所属栏目</label>
                <select name="cid" id="cid" class="form-control" cid="<?php echo $_smarty_tpl->tpl_vars['data']->value['cid'];?>
">

                </select>
            </div>
            <input type="hidden" name="conid" value="<?php echo $_smarty_tpl->tpl_vars['data']->value['conid'];?>
">
            <div class="form-group">
                <label for="ctitle">内容标题</label>
                <input type="text" class="form-control" id="ctitle" placeholder="请输入内容标题" name="ctitle"
                    value="<?php echo $_smarty_tpl->tpl_vars['data']->value['ctitle'];?>
">
            </div>
            <div class="form-group">
                <label for="conts">内容主体</label>
                <textarea name="conts" id="conts" class="form-control" rows="4"><?php echo $_smarty_tpl->tpl_vars['data']->value['conts'];?>
</textarea>
            </div>
            <button type="submit" class="btn btn-default">修改内容</button>
        </form>
    </div>
    <div class="ENTRY_ADD" style="display: none;"><?php echo ENTRY_ADD;?>
</div>
    <?php echo '<script'; ?>
 src="<?php echo JS_ADD;?>
jquerymini.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo JS_ADD;?>
admin/editContent.js"><?php echo '</script'; ?>
>
</body>

</html><?php }
}
