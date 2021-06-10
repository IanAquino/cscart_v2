<?php /* Smarty version Smarty-3.1.21, created on 2021-06-09 19:41:59
         compiled from "C:\xampp\htdocs\cscart\design\backend\templates\addons\point\views\points\manage.tpl" */ ?>
<?php /*%%SmartyHeaderCode:94527940560c0ef57cc14e6-74285568%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd0540bd4a8ac35ad060e68dc04a9b4e62b06f0e0' => 
    array (
      0 => 'C:\\xampp\\htdocs\\cscart\\design\\backend\\templates\\addons\\point\\views\\points\\manage.tpl',
      1 => 1623256905,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '94527940560c0ef57cc14e6-74285568',
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
  'unifunc' => 'content_60c0ef57cecd93_60205858',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_60c0ef57cecd93_60205858')) {function content_60c0ef57cecd93_60205858($_smarty_tpl) {?>
<table class="table table-hover">
  <thead>
    <tr>
      <th scope="col">Name</th>
      <th scope="col">Points</th>
    </tr>
  </thead>
  <tbody>
  <?php  $_smarty_tpl->tpl_vars['value'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['value']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['dados']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['value']->key => $_smarty_tpl->tpl_vars['value']->value) {
$_smarty_tpl->tpl_vars['value']->_loop = true;
?>
    <tr>
     
        <td>
            <a href="admin.php?dispatch=points.upload&user_id=<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['value']->value['user_id'], ENT_QUOTES, 'UTF-8');?>
"> 
                <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['value']->value['firstname'], ENT_QUOTES, 'UTF-8');?>
 <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['value']->value['lastname'], ENT_QUOTES, 'UTF-8');?>
 
            </a>
        </td>
        <td>
            <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['value']->value['sum_total_pontos'], ENT_QUOTES, 'UTF-8');?>

        </td>
    </tr>
    <?php } ?>
  </tbody>
</table><?php }} ?>
