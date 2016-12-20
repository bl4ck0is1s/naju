<?php /* Smarty version Smarty-3.1.19, created on 2016-12-16 19:23:55
         compiled from "/Applications/XAMPP/xamppfiles/htdocs/NajuStore/admin/themes/default/template/controllers/shop/content.tpl" */ ?>
<?php /*%%SmartyHeaderCode:4996754115854313b28f3f6-63054232%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '945193f3a17c7f824d7094bfde7622964d12d40b' => 
    array (
      0 => '/Applications/XAMPP/xamppfiles/htdocs/NajuStore/admin/themes/default/template/controllers/shop/content.tpl',
      1 => 1480113184,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '4996754115854313b28f3f6-63054232',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'shops_tree' => 0,
    'content' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5854313b295826_02915419',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5854313b295826_02915419')) {function content_5854313b295826_02915419($_smarty_tpl) {?>

<div class="row">
	<div class="col-lg-4">
		<?php echo $_smarty_tpl->tpl_vars['shops_tree']->value;?>

	</div>
	<div class="col-lg-8"><?php echo $_smarty_tpl->tpl_vars['content']->value;?>
</div>
</div><?php }} ?>
