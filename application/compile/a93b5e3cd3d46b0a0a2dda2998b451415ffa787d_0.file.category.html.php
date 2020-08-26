<?php
/* Smarty version 3.1.34-dev-7, created on 2020-08-26 08:34:20
  from 'D:\server\server\laomeng\8.20mvcback\mvc\application\template\admin\category.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f461e8c9ec204_65089124',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a93b5e3cd3d46b0a0a2dda2998b451415ffa787d' => 
    array (
      0 => 'D:\\server\\server\\laomeng\\8.20mvcback\\mvc\\application\\template\\admin\\category.html',
      1 => 1598430845,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f461e8c9ec204_65089124 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="<?php echo CSS_ADD;?>
bootstrap.css">
    <link rel="stylesheet" href="<?php echo CSS_ADD;?>
admin/category.css">
</head>

<body>

    <div class="table-con">
        <h1 class="table-title">栏目信息</h1>

        <?php if ($_smarty_tpl->tpl_vars['str']->value) {?>
        <table class="table table-bordered table-con1" style="">
            <tr style="font-size: 16px; font-weight: bold;">
                <td>层级</td>
                <td>分类名称</td>
                <td>操作</td>
            </tr>
            <?php echo $_smarty_tpl->tpl_vars['str']->value;?>

        </table>
        <?php } else { ?>
        <table>
            <tr>
                <td>没有数据</td>
            </tr>
        </table>
        <?php }?>
    </div>
    <div class="pannel addpannel">
        <div class="pannel-con addpannel-con" style="">
            <div class="close addclose"></div>
            <form class="from1" action="<?php echo ENTRY_ADD;?>
/admin/category/addCategory" method="POST"
                style="margin-top: 20px;margin-left: 10px;">
                <div class="form-group">
                    <label for="cname">栏目名称</label>
                    <input type="text" name="cname" class="form-control">
                </div>
                <input type="hidden" value="" class="cid" name="cid">
                <div class="form-group">
                    <label for="isshow">导航可见</label>
                    <select name="isshow" id="isshow" class="form-control">
                        <option value="1">在导航可见</option>
                        <option value="0">在导航不可见</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="tpl_name">对应模板</label>
                    <input type="text" class="form-control" placeholder="添加一级栏目" name="tpl_name">
                </div>
                <div class="form-group">
                    <label for="info">栏目描述</label>
                    <textarea name="info" id="info" class="form-control" rows="4"></textarea>
                </div>
                <input type="submit" class="btn btn-block" value="提交">
            </form>
        </div>
    </div>
    <div class="pannel editpannel">
        <div class="pannel-con editpannel-con" style="height: 490px;">
            <div class="close editclose"></div>
            <form class="from1" action="<?php echo ENTRY_ADD;?>
/admin/category/editCategory" method="POST"
                style="margin-top: 20px;margin-left: 10px; ">
                <div class="form-group">
                    <label for="cnameEdit">一级栏目名称</label>
                    <input type="text" name="cnameEdit" style="margin-bottom:15px;" class="cnameEdit form-control">
                </div>
                <div class="form-group">
                    <label for="pidEdit">父级栏目</label>
                    <select name="pidEdit" id="opts" style="margin-bottom:15px;" class="form-control">
                    </select>
                </div>
                <div class="form-group">
                    <label for="isshow">导航可见</label>
                    <select name="isshowEdit" id="isshow" class="form-control isshowEdit">
                        <option value="1">在导航可见</option>
                        <option value="0">在导航不可见</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="tpl_nameEdit">对应模板</label>
                    <input type="text" class="form-control tpl_nameEdit" placeholder="添加一级栏目" name="tpl_nameEdit">
                </div>
                <div class="form-group">
                    <label for="infoEdit">栏目描述</label>
                    <textarea name="infoEdit" id="info" class="form-control infoEdit" rows="4"></textarea>
                </div>
                <input type="hidden" value="" class="cidEdit" name="cidEdit">
                <input type="button" class="o-edit-btn" value="修改">
            </form>
        </div>
    </div>
    <div class="ENTRY_ADD" style="display: none;"><?php echo ENTRY_ADD;?>
</div>
    <!-- <div class="delFlag"><?php echo $_smarty_tpl->tpl_vars['delFlag']->value;?>
</div> -->
    <?php echo '<script'; ?>
 src="<?php echo JS_ADD;?>
jquerymini.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo JS_ADD;?>
admin/category.js"><?php echo '</script'; ?>
>
</body>

</html><?php }
}
