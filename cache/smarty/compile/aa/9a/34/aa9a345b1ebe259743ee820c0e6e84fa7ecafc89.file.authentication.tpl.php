<?php /* Smarty version Smarty-3.1.19, created on 2016-12-16 19:23:54
         compiled from "/Applications/XAMPP/xamppfiles/htdocs/NajuStore/themes/default-bootstrap/modules/referralprogram/views/templates/hook/authentication.tpl" */ ?>
<?php /*%%SmartyHeaderCode:6201354455854313aebf523-91561586%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'aa9a345b1ebe259743ee820c0e6e84fa7ecafc89' => 
    array (
      0 => '/Applications/XAMPP/xamppfiles/htdocs/NajuStore/themes/default-bootstrap/modules/referralprogram/views/templates/hook/authentication.tpl',
      1 => 1480113188,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '6201354455854313aebf523-91561586',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5854313aee8061_15761728',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5854313aee8061_15761728')) {function content_5854313aee8061_15761728($_smarty_tpl) {?>

<!-- MODULE ReferralProgram -->
<fieldset class="account_creation">
	<h3 class="page-subheading"><?php echo smartyTranslate(array('s'=>'Referral program','mod'=>'referralprogram'),$_smarty_tpl);?>
</h3>
	<p class="form-group">
		<label for="referralprogram"><?php echo smartyTranslate(array('s'=>'E-mail address of your sponsor','mod'=>'referralprogram'),$_smarty_tpl);?>
</label>
		<input class="form-control" type="text" size="52" maxlength="128" id="referralprogram" name="referralprogram" value="<?php if (isset($_POST['referralprogram'])) {?><?php echo htmlspecialchars($_POST['referralprogram'], ENT_QUOTES, 'UTF-8', true);?>
<?php }?>" />
	</p>
</fieldset>
<!-- END : MODULE ReferralProgram --><?php }} ?>
