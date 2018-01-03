<?php
/* Smarty version 3.1.30, created on 2018-01-03 21:43:48
  from "/var/www/html/E-commerce/smarty/templates/admin/listPro.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a4cde14853c84_29073812',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '05746fce519c1a628dd6f71c4e93ccf3a85efcf0' => 
    array (
      0 => '/var/www/html/E-commerce/smarty/templates/admin/listPro.html',
      1 => 1514984505,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a4cde14853c84_29073812 (Smarty_Internal_Template $_smarty_tpl) {
if (!is_callable('smarty_modifier_date_format')) require_once '/etc/php/smarty-3.1.30/libs/plugins/modifier.date_format.php';
?>
<!doctype html>
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
<div id="showDetail" style="display:none;">

</div>
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
            <th width="10%">商品分类</th>
            <th width="10%">是否上架</th>
            <th width="10%">商品价格</th>
            <th width="15%">上架时间</th>
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
            <td><?php echo $_smarty_tpl->tpl_vars['row']->value['cName'];?>
</td>
            <td>
                <?php if ($_smarty_tpl->tpl_vars['row']->value['isShow'] == 1) {?>
                上架
                <?php } else { ?>
                下架
                <?php }?>
            </td>
            <td><?php echo $_smarty_tpl->tpl_vars['row']->value['iPrice'];?>
元</td>
            <td><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['row']->value['pubTime'],"%Y-%m-%d %H:%M:%S");?>
</td>
            <td align="center">
                <input type="button" value="详情" class="btn"
                       onclick="showDetail(<?php echo $_smarty_tpl->tpl_vars['row']->value['id'];?>
,'<?php echo $_smarty_tpl->tpl_vars['row']->value['pName'];?>
')"><input
                    type="button" value="修改" class="btn" onclick="editPro(<?php echo $_smarty_tpl->tpl_vars['row']->value['id'];?>
)"><input
                    type="button" value="删除" class="btn" onclick="delPro(<?php echo $_smarty_tpl->tpl_vars['row']->value['id'];?>
)">
                <div id="showDetail<?php echo $_smarty_tpl->tpl_vars['row']->value['id'];?>
" style="display:none;">
                    <table class="table" cellspacing="0" cellpadding="0">
                        <tr>
                            <td width="20%" align="right">商品名称</td>
                            <td><?php echo $_smarty_tpl->tpl_vars['row']->value['pName'];?>
</td>
                        </tr>
                        <tr>
                            <td width="20%" align="right">商品类别</td>
                            <td><?php echo $_smarty_tpl->tpl_vars['row']->value['cName'];?>
</td>
                        </tr>
                        <tr>
                            <td width="20%" align="right">商品货号</td>
                            <td><?php echo $_smarty_tpl->tpl_vars['row']->value['pSn'];?>
</td>
                        </tr>
                        <tr>
                            <td width="20%" align="right">商品数量</td>
                            <td><?php echo $_smarty_tpl->tpl_vars['row']->value['pNum'];?>
</td>
                        </tr>
                        <tr>
                            <td width="20%" align="right">市场价格</td>
                            <td><?php echo $_smarty_tpl->tpl_vars['row']->value['mPrice'];?>
</td>
                        </tr>
                        <tr>
                            <td width="20%" align="right">销售价格</td>
                            <td><?php echo $_smarty_tpl->tpl_vars['row']->value['iPrice'];?>
</td>
                        </tr>
                        <tr>
                            <td width="20%" align="right">商品图片</td>
                            <td>
                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, getImgByProId($_smarty_tpl->tpl_vars['row']->value['id']), 'img');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['img']->value) {
?>
                                <img width="100" height="100" src="../images/uploads/<?php echo $_smarty_tpl->tpl_vars['img']->value['albumPath'];?>
" alt=""/>&nbsp;
                                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

                            </td>
                        </tr>
                        <tr>
                            <td width="20%" align="right">是否上架</td>
                            <td>
                                <?php if ($_smarty_tpl->tpl_vars['row']->value['isShow'] == 1) {?>
                                上架
                                <?php } else { ?>
                                下架
                                <?php }?>
                            </td>
                        </tr>
                        <tr>
                            <td width="20%" align="right">是否热卖</td>
                            <td>
                                <?php if ($_smarty_tpl->tpl_vars['row']->value['isHot'] == 1) {?>
                                热卖
                                <?php } else { ?>
                                促销
                                <?php }?>
                            </td>
                        </tr>
                    </table>
                    <span style="display:block;width:80%; ">商品描述<br/><?php echo $_smarty_tpl->tpl_vars['row']->value['pDesc'];?>
</span>
                </div>
            </td>
        </tr>
        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

        <?php if ($_smarty_tpl->tpl_vars['totalRows']->value > $_smarty_tpl->tpl_vars['pageSize']->value) {?>
        <tr>
            <td colspan="7"><?php echo $_smarty_tpl->tpl_vars['showPage']->value;?>
</td>
        </tr>
        <?php }?>
        </tbody>
    </table>
</div>
<?php echo '<script'; ?>
 type="text/javascript">
    function showDetail(id, t) {
        $("#showDetail" + id).dialog({
            height: "auto",
            width: "auto",
            position: {my: "center", at: "center", collision: "fit"},
            modal: false,//是否模式对话框
            draggable: true,//是否允许拖拽
            resizable: true,//是否允许拖动
            title: "商品名称：" + t,//对话框标题
            show: "slide",
            hide: "explode"
        });
    }

    function addPro() {
        window.location = 'addPro.php';
    }

    function editPro(id) {
        window.location = 'editPro.php?id=' + id;
    }

    function delPro(id) {
        if (window.confirm("确定要删除吗?删除之后不可恢复")) {
            window.location = 'doAdminAction.php?act=delPro&id=' + id;
        }
    }

    function search() {
        if (event.keyCode === 13) {
            var val = document.getElementById("search").value;
            window.location = "listPro.php?keywords=" + val;
        }
    }

    function change(val) {
        window.location = "listPro.php?order=" + val;
    }
<?php echo '</script'; ?>
>
</body>
</html><?php }
}
