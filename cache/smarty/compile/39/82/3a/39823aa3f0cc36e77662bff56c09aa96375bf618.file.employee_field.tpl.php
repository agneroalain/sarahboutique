<?php /* Smarty version Smarty-3.1.19, created on 2016-06-14 08:20:39
         compiled from "C:\wamp64\www\test_presta\admin\themes\default\template\controllers\logs\employee_field.tpl" */ ?>
<?php /*%%SmartyHeaderCode:12750575fbe57a41b27-14612807%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '39823aa3f0cc36e77662bff56c09aa96375bf618' => 
    array (
      0 => 'C:\\wamp64\\www\\test_presta\\admin\\themes\\default\\template\\controllers\\logs\\employee_field.tpl',
      1 => 1460113476,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '12750575fbe57a41b27-14612807',
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
  'unifunc' => 'content_575fbe57a63281_18173319',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_575fbe57a63281_18173319')) {function content_575fbe57a63281_18173319($_smarty_tpl) {?>
<span class="employee_avatar_small">
	<img class="imgm img-thumbnail" alt="" src="<?php echo $_smarty_tpl->tpl_vars['employee_image']->value;?>
" width="32" height="32" />
</span>
<?php echo $_smarty_tpl->tpl_vars['employee_name']->value;?>
<?php }} ?>
