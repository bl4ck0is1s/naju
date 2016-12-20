<?php /* Smarty version Smarty-3.1.19, created on 2016-12-16 19:23:58
         compiled from "/Applications/XAMPP/xamppfiles/htdocs/NajuStore/admin/themes/default/template/helpers/list/list_action_edit.tpl" */ ?>
<?php /*%%SmartyHeaderCode:7846934505854313e0dca29-69617153%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9ec0cea2331186b578c46907b78bc74dbb56a2d7' => 
    array (
      0 => '/Applications/XAMPP/xamppfiles/htdocs/NajuStore/admin/themes/default/template/helpers/list/list_action_edit.tpl',
      1 => 1480113184,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '7846934505854313e0dca29-69617153',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'href' => 0,
    'action' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5854313e0f1628_10899279',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5854313e0f1628_10899279')) {function content_5854313e0f1628_10899279($_smarty_tpl) {?>
<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['href']->value, ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['action']->value, ENT_QUOTES, 'UTF-8', true);?>
" class="edit">
	<i class="icon-pencil"></i> <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['action']->value, ENT_QUOTES, 'UTF-8', true);?>

</a><?php }} ?>
