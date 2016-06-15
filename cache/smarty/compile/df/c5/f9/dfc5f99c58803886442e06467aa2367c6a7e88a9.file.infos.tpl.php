<?php /* Smarty version Smarty-3.1.19, created on 2016-06-14 14:22:04
         compiled from "C:\wamp64\www\test_presta\modules\bankwire\views\templates\hook\infos.tpl" */ ?>
<?php /*%%SmartyHeaderCode:153515760130c88b174-52553834%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'dfc5f99c58803886442e06467aa2367c6a7e88a9' => 
    array (
      0 => 'C:\\wamp64\\www\\test_presta\\modules\\bankwire\\views\\templates\\hook\\infos.tpl',
      1 => 1460113476,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '153515760130c88b174-52553834',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5760130ca79707_80491651',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5760130ca79707_80491651')) {function content_5760130ca79707_80491651($_smarty_tpl) {?>

<div class="alert alert-info">
<img src="../modules/bankwire/bankwire.jpg" style="float:left; margin-right:15px;" width="86" height="49">
<p><strong><?php echo smartyTranslate(array('s'=>"This module allows you to accept secure payments by bank wire.",'mod'=>'bankwire'),$_smarty_tpl);?>
</strong></p>
<p><?php echo smartyTranslate(array('s'=>"If the client chooses to pay by bank wire, the order's status will change to 'Waiting for Payment.'",'mod'=>'bankwire'),$_smarty_tpl);?>
</p>
<p><?php echo smartyTranslate(array('s'=>"That said, you must manually confirm the order upon receiving the bank wire.",'mod'=>'bankwire'),$_smarty_tpl);?>
</p>
</div>
<?php }} ?>
