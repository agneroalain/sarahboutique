<?php /* Smarty version Smarty-3.1.19, created on 2016-06-14 13:33:44
         compiled from "C:\wamp64\www\test_presta\admin510x5fzkd\themes\default\template\controllers\logs\employee_field.tpl" */ ?>
<?php /*%%SmartyHeaderCode:24814576007b8903af7-34512769%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1fc672aecf1623053e4f5051b5c88061d69e173a' => 
    array (
      0 => 'C:\\wamp64\\www\\test_presta\\admin510x5fzkd\\themes\\default\\template\\controllers\\logs\\employee_field.tpl',
      1 => 1460113476,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '24814576007b8903af7-34512769',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'employee_image' => 0,
    'employee_name' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_576007b8995d38_52906470',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_576007b8995d38_52906470')) {function content_576007b8995d38_52906470($_smarty_tpl) {?>
<span class="employee_avatar_small">
	<img class="imgm img-thumbnail" alt="" src="<?php echo $_smarty_tpl->tpl_vars['employee_image']->value;?>
" width="32" height="32" />
</span>
<?php echo $_smarty_tpl->tpl_vars['employee_name']->value;?>
<?php }} ?>
