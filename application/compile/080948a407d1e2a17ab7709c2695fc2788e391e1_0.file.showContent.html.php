<?php
/* Smarty version 3.1.34-dev-7, created on 2020-08-25 14:25:01
  from 'D:\server\server\laomeng\8.20mvcback\mvc\application\template\admin\showContent.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f451f3d0865c2_39898270',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '080948a407d1e2a17ab7709c2695fc2788e391e1' => 
    array (
      0 => 'D:\\server\\server\\laomeng\\8.20mvcback\\mvc\\application\\template\\admin\\showContent.html',
      1 => 1598365493,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f451f3d0865c2_39898270 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h3><?php echo $_smarty_tpl->tpl_vars['data']->value["ctitle"];?>
</h3>
    <p>
        <?php echo $_smarty_tpl->tpl_vars['data']->value["conts"];?>

    </p>
</body>

</html><?php }
}
