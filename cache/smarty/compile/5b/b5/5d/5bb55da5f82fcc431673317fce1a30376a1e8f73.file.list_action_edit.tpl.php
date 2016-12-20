<?php /* Smarty version Smarty-3.1.19, created on 2016-12-16 14:32:10
         compiled from "/Applications/XAMPP/xamppfiles/htdocs/NajuStore/admin501baaw9t/themes/default/template/helpers/list/list_action_edit.tpl" */ ?>
<?php /*%%SmartyHeaderCode:27578853958544f4a57d862-95854393%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5bb55da5f82fcc431673317fce1a30376a1e8f73' => 
    array (
      0 => '/Applications/XAMPP/xamppfiles/htdocs/NajuStore/admin501baaw9t/themes/default/template/helpers/list/list_action_edit.tpl',
      1 => 1480113184,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '27578853958544f4a57d862-95854393',
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
  'unifunc' => 'content_58544f4a5e0269_93074239',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58544f4a5e0269_93074239')) {function content_58544f4a5e0269_93074239($_smarty_tpl) {?>
<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['href']->value, ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['action']->value, ENT_QUOTES, 'UTF-8', true);?>
" class="edit">
	<i class="icon-pencil"></i> <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['action']->value, ENT_QUOTES, 'UTF-8', true);?>

</a><?php }} ?>
