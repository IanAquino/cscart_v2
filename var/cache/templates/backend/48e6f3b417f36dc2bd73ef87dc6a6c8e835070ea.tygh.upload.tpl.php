<?php /* Smarty version Smarty-3.1.21, created on 2021-06-15 03:16:31
         compiled from "C:\xampp\htdocs\cscart\design\backend\templates\addons\point\views\points\upload.tpl" */ ?>
<?php /*%%SmartyHeaderCode:177866180860c7f15fcd1415-69136903%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '48e6f3b417f36dc2bd73ef87dc6a6c8e835070ea' => 
    array (
      0 => 'C:\\xampp\\htdocs\\cscart\\design\\backend\\templates\\addons\\point\\views\\points\\upload.tpl',
      1 => 1623709699,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '177866180860c7f15fcd1415-69136903',
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
  'unifunc' => 'content_60c7f15fcfe619_58245287',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_60c7f15fcfe619_58245287')) {function content_60c7f15fcfe619_58245287($_smarty_tpl) {?>

<table class="table table-sm p-2">
 
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
