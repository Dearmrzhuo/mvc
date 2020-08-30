<?php
/* Smarty version 3.1.34-dev-7, created on 2020-08-28 04:19:27
  from 'D:\server\server\laomeng\8.20mvcback\mvc\application\template\admin\showContent.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f4885cf4e80b9_32068447',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '080948a407d1e2a17ab7709c2695fc2788e391e1' => 
    array (
      0 => 'D:\\server\\server\\laomeng\\8.20mvcback\\mvc\\application\\template\\admin\\showContent.html',
      1 => 1598588361,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f4885cf4e80b9_32068447 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .container{
            width: 800px;
            height: auto;
            margin: 0 auto;
            margin-top: 30px;
            border: 2px solid white;
            border-radius: 20px;
            padding: 20px;
        }
    </style>
</head>

<body>
<div class="container">
    <h3><?php echo $_smarty_tpl->tpl_vars['data']->value["ctitle"];?>
</h3>
    <p>
        <?php echo $_smarty_tpl->tpl_vars['data']->value["conts"];?>

    </p>
</div>
</body>

</html><?php }
}
