<?php /* Smarty version Smarty-3.1.21, created on 2021-06-09 19:37:21
         compiled from "C:\xampp\htdocs\cscart\design\backend\templates\addons\help_center\hooks\index\styles.post.tpl" */ ?>
<?php /*%%SmartyHeaderCode:40863427860c0ee417a93b3-19872101%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f1b98df8a953424e5991d1d3500c78c5bc252ec6' => 
    array (
      0 => 'C:\\xampp\\htdocs\\cscart\\design\\backend\\templates\\addons\\help_center\\hooks\\index\\styles.post.tpl',
      1 => 1622708843,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '40863427860c0ee417a93b3-19872101',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_60c0ee417ad288_30970515',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_60c0ee417ad288_30970515')) {function content_60c0ee417ad288_30970515($_smarty_tpl) {?><?php if (!is_callable('smarty_function_style')) include 'C:/xampp/htdocs/cscart/app/functions/smarty_plugins\\function.style.php';
?><?php if ((defined('ACCOUNT_TYPE') ? constant('ACCOUNT_TYPE') : null)==="admin") {?>
    <?php echo smarty_function_style(array('src'=>"addons/help_center/styles.less"),$_smarty_tpl);?>

<?php }?>
<?php }} ?>
