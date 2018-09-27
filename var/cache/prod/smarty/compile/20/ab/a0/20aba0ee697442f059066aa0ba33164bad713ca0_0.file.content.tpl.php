<?php
/* Smarty version 3.1.32, created on 2018-09-27 12:46:19
  from 'H:\xampp\htdocs\prestashop\admin7875bv0s3\themes\default\template\content.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5bad095b81ff35_02307086',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '20aba0ee697442f059066aa0ba33164bad713ca0' => 
    array (
      0 => 'H:\\xampp\\htdocs\\prestashop\\admin7875bv0s3\\themes\\default\\template\\content.tpl',
      1 => 1538063998,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5bad095b81ff35_02307086 (Smarty_Internal_Template $_smarty_tpl) {
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
