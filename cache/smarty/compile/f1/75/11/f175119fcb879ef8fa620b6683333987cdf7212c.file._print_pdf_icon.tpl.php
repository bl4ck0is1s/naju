<?php /* Smarty version Smarty-3.1.19, created on 2016-12-16 19:23:51
         compiled from "/Applications/XAMPP/xamppfiles/htdocs/NajuStore/admin/themes/default/template/controllers/outstanding/_print_pdf_icon.tpl" */ ?>
<?php /*%%SmartyHeaderCode:5576377725854313776d353-20726195%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f175119fcb879ef8fa620b6683333987cdf7212c' => 
    array (
      0 => '/Applications/XAMPP/xamppfiles/htdocs/NajuStore/admin/themes/default/template/controllers/outstanding/_print_pdf_icon.tpl',
      1 => 1480113184,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '5576377725854313776d353-20726195',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'link' => 0,
    'id_invoice' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_58543137781420_79770606',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58543137781420_79770606')) {function content_58543137781420_79770606($_smarty_tpl) {?>


<?php if (Configuration::get('PS_INVOICE')) {?>
	<span style="width:20px; margin-right:5px;">
		<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getAdminLink('AdminPdf'), ENT_QUOTES, 'UTF-8', true);?>
&amp;submitAction=generateInvoicePDF&amp;id_order_invoice=<?php echo $_smarty_tpl->tpl_vars['id_invoice']->value;?>
"><img src="../img/admin/tab-invoice.gif" alt="invoice" /></a>
	</span>
<?php }?><?php }} ?>
