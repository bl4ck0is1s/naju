<?php /* Smarty version Smarty-3.1.19, created on 2016-12-16 19:23:47
         compiled from "/Applications/XAMPP/xamppfiles/htdocs/NajuStore/themes/default-bootstrap/category-count.tpl" */ ?>
<?php /*%%SmartyHeaderCode:132367629158543133c36973-85477983%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '475f3c97deb99ba2591c06b49d1f87ab55b834f0' => 
    array (
      0 => '/Applications/XAMPP/xamppfiles/htdocs/NajuStore/themes/default-bootstrap/category-count.tpl',
      1 => 1480113186,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '132367629158543133c36973-85477983',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'category' => 0,
    'nb_products' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_58543133c806e8_68690147',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58543133c806e8_68690147')) {function content_58543133c806e8_68690147($_smarty_tpl) {?>
<span class="heading-counter"><?php if ((isset($_smarty_tpl->tpl_vars['category']->value)&&$_smarty_tpl->tpl_vars['category']->value->id==1)||(isset($_smarty_tpl->tpl_vars['nb_products']->value)&&$_smarty_tpl->tpl_vars['nb_products']->value==0)) {?><?php echo smartyTranslate(array('s'=>'There are no products in this category.'),$_smarty_tpl);?>
<?php } else { ?><?php if (isset($_smarty_tpl->tpl_vars['nb_products']->value)&&$_smarty_tpl->tpl_vars['nb_products']->value==1) {?><?php echo smartyTranslate(array('s'=>'There is 1 product.'),$_smarty_tpl);?>
<?php } elseif (isset($_smarty_tpl->tpl_vars['nb_products']->value)) {?><?php echo smartyTranslate(array('s'=>'There are %d products.','sprintf'=>$_smarty_tpl->tpl_vars['nb_products']->value),$_smarty_tpl);?>
<?php }?><?php }?></span>
<?php }} ?>
