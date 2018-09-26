<?php
/* Smarty version 3.1.32, created on 2018-09-26 09:29:43
  from 'H:\xampp\htdocs\prestashop\admin123yknsbv\themes\default\template\content.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5bab89c7e99994_08966752',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9d7f32ed9d89df0c70be812498b571640b23fcae' => 
    array (
      0 => 'H:\\xampp\\htdocs\\prestashop\\admin123yknsbv\\themes\\default\\template\\content.tpl',
      1 => 1537967023,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5bab89c7e99994_08966752 (Smarty_Internal_Template $_smarty_tpl) {
?><div id="ajax_confirmation" class="alert alert-success hide"></div>
<div id="ajaxBox" style="display:none"></div>


<div class="row">
	<div class="col-lg-12">
		<?php if (isset($_smarty_tpl->tpl_vars['content']->value)) {?>
			<?php echo $_smarty_tpl->tpl_vars['content']->value;?>

		<?php }?>
	</div>
</div>
<?php }
}
