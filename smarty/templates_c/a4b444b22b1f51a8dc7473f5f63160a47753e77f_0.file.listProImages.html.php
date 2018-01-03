<?php
/* Smarty version 3.1.30, created on 2018-01-03 21:44:37
  from "/var/www/html/E-commerce/smarty/templates/admin/listProImages.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a4cde4598f2b8_28313222',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a4b444b22b1f51a8dc7473f5f63160a47753e77f' => 
    array (
      0 => '/var/www/html/E-commerce/smarty/templates/admin/listProImages.html',
      1 => 1514984505,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a4cde4598f2b8_28313222 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>商品列表</title>
    <link rel="stylesheet" href="styles/backstage.css">
    <link rel="stylesheet" href="scripts/jquery-ui/css/ui-lightness/jquery-ui-1.10.4.custom.css"/>
    <?php echo '<script'; ?>
 src="scripts/jquery-ui/js/jquery-1.10.2.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="scripts/jquery-ui/js/jquery-ui-1.10.4.custom.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="scripts/jquery-ui/js/jquery-ui-1.10.4.custom.min.js"><?php echo '</script'; ?>
>
</head>

<body>
<div class="details">
    <div class="details_operation clearfix">
        <div class="bui_select">
            <input type="button" value="添&nbsp;&nbsp;加" class="add" onclick="addPro()">
        </div>
        <div class="fr">
            <div class="text">
                <span>商品价格：</span>
                <div class="bui_select">
                    <select class="select" onchange="change(this.value)">
                        <option value="">-请选择-</option>
                        <option value="iPrice asc">由低到高</option>
                        <option value="iPrice desc">由高到低</option>
                    </select>
                </div>
            </div>
            <div class="text">
                <span>上架时间：</span>
                <div class="bui_select">
                    <select class="select" onchange="change(this.value)">
                        <option value="">-请选择-</option>
                        <option value="pubTime desc">最新发布</option>
                        <option value="pubTime asc">历史发布</option>
                    </select>
                </div>
            </div>
            <div class="text">
                <span>搜索</span>
                <input type="text" value="" class="search" id="search" onkeypress="search()" placeholder="请输入商品名称">
            </div>
        </div>
    </div>
    <!--表格-->
    <table class="table" cellspacing="0" cellpadding="0">
        <thead>
        <tr>
            <th width="10%">编号</th>
            <th width="20%">商品名称</th>
            <th width="40%">商品图片</th>
            <th>操作</th>
        </tr>
        </thead>
        <tbody>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['rows']->value, 'row');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['row']->value) {
?>
        <tr>
            <td><input type="checkbox" id="<?php echo $_smarty_tpl->tpl_vars['row']->value['id'];?>
" class="check"><label
                    for="<?php echo $_smarty_tpl->tpl_vars['row']->value['id'];?>
" class="label"><?php echo $_smarty_tpl->tpl_vars['row']->value['id'];?>
</label></td>
            <td><?php echo $_smarty_tpl->tpl_vars['row']->value['pName'];?>
</td>
            <td>
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, getImgByProId($_smarty_tpl->tpl_vars['row']->value['id']), 'img');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['img']->value) {
?>
                <img width="100" height="100" src="../images/uploads/<?php echo $_smarty_tpl->tpl_vars['img']->value['albumPath'];?>
" alt=""/>&nbsp;&nbsp;
                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

            </td>
            <td>
                <input type="button" value="添加文字水印" onclick="doImg('<?php echo $_smarty_tpl->tpl_vars['row']->value['id'];?>
','waterText')"
                       class="btn"/>
                <input type="button" value="添加图片水印" onclick="doImg('<?php echo $_smarty_tpl->tpl_vars['row']->value['id'];?>
','waterPic')"
                       class="btn"/>
            </td>
        </tr>
        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

        <?php if ($_smarty_tpl->tpl_vars['totalRows']->value > $_smarty_tpl->tpl_vars['pageSize']->value) {?>
        <tr>
            <td colspan="4"><?php echo $_smarty_tpl->tpl_vars['showPage']->value;?>
</td>
        </tr>
        <?php }?>
        </tbody>
    </table>
</div>
<?php echo '<script'; ?>
 type="text/javascript">

    function addPro() {
        window.location = 'addPro.php';
    }

    function search() {
        if (event.keyCode === 13) {
            var val = document.getElementById("search").value;
            window.location = "listProImages.php?keywords=" + val;
        }
    }

    function change(val) {
        window.location = "listProImages.php?order=" + val;
    }

    function doImg(id, act) {
        window.location = "doAdminAction.php?act=" + act + "&id=" + id;
    }
<?php echo '</script'; ?>
>
</body>
</html><?php }
}
