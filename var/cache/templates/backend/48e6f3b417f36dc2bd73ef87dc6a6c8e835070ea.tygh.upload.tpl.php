<?php /* Smarty version Smarty-3.1.21, created on 2021-06-09 19:37:23
         compiled from "C:\xampp\htdocs\cscart\design\backend\templates\addons\point\views\points\upload.tpl" */ ?>
<?php /*%%SmartyHeaderCode:58024450960c0ee430319a6-27976264%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '48e6f3b417f36dc2bd73ef87dc6a6c8e835070ea' => 
    array (
      0 => 'C:\\xampp\\htdocs\\cscart\\design\\backend\\templates\\addons\\point\\views\\points\\upload.tpl',
      1 => 1623256637,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '58024450960c0ee430319a6-27976264',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'dados' => 0,
    'value' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_60c0ee43035fc6_12529020',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_60c0ee43035fc6_12529020')) {function content_60c0ee43035fc6_12529020($_smarty_tpl) {?>

<table class="table table-sm">
 
  <thead>
    <tr>
      <th scope="col">First</th>
      <th scope="col">Last</th>
      <th scope="col">Data</th>
      <th scope="col">Points</th>
    </tr>
  </thead>
    <?php  $_smarty_tpl->tpl_vars['value'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['value']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['dados']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['value']->key => $_smarty_tpl->tpl_vars['value']->value) {
$_smarty_tpl->tpl_vars['value']->_loop = true;
?>
  <tbody>
     <tr>
      <td><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['value']->value['firstname'], ENT_QUOTES, 'UTF-8');?>
</td>
      <td><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['value']->value['lastname'], ENT_QUOTES, 'UTF-8');?>
</td>
      <td><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['value']->value['data'], ENT_QUOTES, 'UTF-8');?>
</td>
      <td><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['value']->value['total_pontos'], ENT_QUOTES, 'UTF-8');?>
</td>
     </tr>
    </tbody>
    <?php } ?>
</table><?php }} ?>
