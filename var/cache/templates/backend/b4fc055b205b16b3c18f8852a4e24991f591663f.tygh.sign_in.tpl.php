<?php /* Smarty version Smarty-3.1.21, created on 2021-06-09 19:41:53
         compiled from "C:\xampp\htdocs\cscart\design\backend\templates\buttons\sign_in.tpl" */ ?>
<?php /*%%SmartyHeaderCode:187307061060c0ef51ad1dc1-91762390%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b4fc055b205b16b3c18f8852a4e24991f591663f' => 
    array (
      0 => 'C:\\xampp\\htdocs\\cscart\\design\\backend\\templates\\buttons\\sign_in.tpl',
      1 => 1622708843,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '187307061060c0ef51ad1dc1-91762390',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'but_onclick' => 0,
    'but_href' => 0,
    'but_role' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_60c0ef51ad57a9_80449321',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_60c0ef51ad57a9_80449321')) {function content_60c0ef51ad57a9_80449321($_smarty_tpl) {?><?php
\Tygh\Languages\Helper::preloadLangVars(array('sign_in'));
?>
<?php echo $_smarty_tpl->getSubTemplate ("buttons/button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('but_text'=>$_smarty_tpl->__("sign_in"),'but_onclick'=>$_smarty_tpl->tpl_vars['but_onclick']->value,'but_href'=>$_smarty_tpl->tpl_vars['but_href']->value,'but_arrow'=>"on",'but_role'=>$_smarty_tpl->tpl_vars['but_role']->value), 0);?>
<?php }} ?>
