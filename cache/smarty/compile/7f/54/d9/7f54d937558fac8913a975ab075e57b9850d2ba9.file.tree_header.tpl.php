<?php /* Smarty version Smarty-3.1.19, created on 2016-12-16 19:23:59
         compiled from "/Applications/XAMPP/xamppfiles/htdocs/NajuStore/admin/themes/default/template/helpers/tree/tree_header.tpl" */ ?>
<?php /*%%SmartyHeaderCode:5211401215854313f618d36-72952249%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7f54d937558fac8913a975ab075e57b9850d2ba9' => 
    array (
      0 => '/Applications/XAMPP/xamppfiles/htdocs/NajuStore/admin/themes/default/template/helpers/tree/tree_header.tpl',
      1 => 1480113184,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '5211401215854313f618d36-72952249',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'title' => 0,
    'toolbar' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5854313f62a554_60996071',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5854313f62a554_60996071')) {function content_5854313f62a554_60996071($_smarty_tpl) {?>
<div class="tree-panel-heading-controls clearfix">
	<?php if (isset($_smarty_tpl->tpl_vars['title']->value)) {?><i class="icon-tag"></i>&nbsp;<?php echo smartyTranslate(array('s'=>$_smarty_tpl->tpl_vars['title']->value),$_smarty_tpl);?>
<?php }?>
	<?php if (isset($_smarty_tpl->tpl_vars['toolbar']->value)) {?><?php echo $_smarty_tpl->tpl_vars['toolbar']->value;?>
<?php }?>
</div><?php }} ?>
