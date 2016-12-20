<?php /* Smarty version Smarty-3.1.19, created on 2016-12-16 19:23:52
         compiled from "/Applications/XAMPP/xamppfiles/htdocs/NajuStore/themes/default-bootstrap/modules/cheque/views/templates/hook/infos.tpl" */ ?>
<?php /*%%SmartyHeaderCode:161660523058543138c1de70-99663964%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b802ce8bb755bd38e94c6615ff1cc42d7eb5d9a6' => 
    array (
      0 => '/Applications/XAMPP/xamppfiles/htdocs/NajuStore/themes/default-bootstrap/modules/cheque/views/templates/hook/infos.tpl',
      1 => 1480113188,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '161660523058543138c1de70-99663964',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_58543138c2b3e3_66070067',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58543138c2b3e3_66070067')) {function content_58543138c2b3e3_66070067($_smarty_tpl) {?>

<div class="alert alert-info">
<img src="../modules/cheque/cheque.jpg" style="float:left; margin-right:15px;" width="86" height="49">
<p><strong><?php echo smartyTranslate(array('s'=>"This module allows you to accept payments by check.",'mod'=>'cheque'),$_smarty_tpl);?>
</strong></p>
<p><?php echo smartyTranslate(array('s'=>"If the client chooses this payment method, the order status will change to 'Waiting for payment.'",'mod'=>'cheque'),$_smarty_tpl);?>
</p>
<p><?php echo smartyTranslate(array('s'=>"You will need to manually confirm the order as soon as you receive a check.",'mod'=>'cheque'),$_smarty_tpl);?>
</p>
</div>
<?php }} ?>
