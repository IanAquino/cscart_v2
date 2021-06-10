<?php /* Smarty version Smarty-3.1.21, created on 2021-06-09 19:50:30
         compiled from "C:\xampp\htdocs\cscart\design\backend\templates\addons\help_center\hooks\index\toolbar.post.tpl" */ ?>
<?php /*%%SmartyHeaderCode:190405067260c0f156e57d43-27845230%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '91253fd74673725d95976d4ef7785454fdd37a16' => 
    array (
      0 => 'C:\\xampp\\htdocs\\cscart\\design\\backend\\templates\\addons\\help_center\\hooks\\index\\toolbar.post.tpl',
      1 => 1622708843,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '190405067260c0f156e57d43-27845230',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_60c0f156e78f31_03674150',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_60c0f156e78f31_03674150')) {function content_60c0f156e78f31_03674150($_smarty_tpl) {?><?php if ((defined('ACCOUNT_TYPE') ? constant('ACCOUNT_TYPE') : null)==="admin") {?>
    <div class="help-center__toolbar help-center__toolbar--hidden">
        <a class="btn help-center__show-help-center" href="#">
            <i class="help-center__show-help-center--icon icon-question-sign"></i>
        </a>
    </div>
<?php }?>
<?php }} ?>
