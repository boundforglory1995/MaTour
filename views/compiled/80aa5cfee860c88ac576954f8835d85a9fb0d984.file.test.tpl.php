<?php /* Smarty version Smarty-3.1.18, created on 2014-11-04 11:33:10
         compiled from "views\test.tpl" */ ?>
<?php /*%%SmartyHeaderCode:548541944cc77f613-44863568%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '80aa5cfee860c88ac576954f8835d85a9fb0d984' => 
    array (
      0 => 'views\\test.tpl',
      1 => 1412078570,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '548541944cc77f613-44863568',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_541944cc7814e3_04440153',
  'variables' => 
  array (
    'titlekop1' => 0,
    'textkop1' => 0,
    'titlekop2' => 0,
    'textkop2' => 0,
    'titlekop3' => 0,
    'textkop3' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_541944cc7814e3_04440153')) {function content_541944cc7814e3_04440153($_smarty_tpl) {?><div class="row">
<div class="large-4 medium-6 small-12 columns panel">
	<img class="kolomTopFoto" src="Fotos/ajaxlogosmall.jpg">
	<h4><?php echo $_smarty_tpl->tpl_vars['titlekop1']->value;?>
</h4>
	<p><?php echo $_smarty_tpl->tpl_vars['textkop1']->value;?>
</p>
</div>

<div class="large-4 medium-6 small-12 columns panel">
	<img class="kolomTopFoto" src="Fotos/ajaxlogosmall.jpg">
	<h4><?php echo $_smarty_tpl->tpl_vars['titlekop2']->value;?>
</h4>
	<p><?php echo $_smarty_tpl->tpl_vars['textkop2']->value;?>
</p>
</div>

<div class="large-4 medium-12 small-12 columns panel">
	<img class="kolomTopFoto" src="Fotos/ajaxlogosmall.jpg">
	<h4><?php echo $_smarty_tpl->tpl_vars['titlekop3']->value;?>
</h4>
	<p><?php echo $_smarty_tpl->tpl_vars['textkop3']->value;?>
</p>
</div>

</div>






<?php }} ?>
