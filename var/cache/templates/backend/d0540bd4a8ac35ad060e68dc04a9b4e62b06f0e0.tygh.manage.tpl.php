<?php /* Smarty version Smarty-3.1.21, created on 2021-06-15 03:16:06
         compiled from "C:\xampp\htdocs\cscart\design\backend\templates\addons\point\views\points\manage.tpl" */ ?>
<?php /*%%SmartyHeaderCode:49679240360c7f146839da2-73523767%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd0540bd4a8ac35ad060e68dc04a9b4e62b06f0e0' => 
    array (
      0 => 'C:\\xampp\\htdocs\\cscart\\design\\backend\\templates\\addons\\point\\views\\points\\manage.tpl',
      1 => 1623714160,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '49679240360c7f146839da2-73523767',
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
  'unifunc' => 'content_60c7f146891985_39772284',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_60c7f146891985_39772284')) {function content_60c7f146891985_39772284($_smarty_tpl) {?>
<table class="table table-hover p-5">
  <thead>
    <tr>
      <th scope="col">Name</th>
      <th scope="col">Total Points</th>
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
        <td>
            <button type="button" class="btn btn-primary" onclick="$('#frm<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['value']->value['user_id'], ENT_QUOTES, 'UTF-8');?>
points').toggle();">
                    Insert Points
            </button>

             <form id="frm<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['value']->value['user_id'], ENT_QUOTES, 'UTF-8');?>
points" method="POST" action="admin.php?dispatch=points.manage" class="hidden">
                    <input type="hidden" name="user_id" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['value']->value['user_id'], ENT_QUOTES, 'UTF-8');?>
"/>
                   
                    <input type="number" name="total_pontos"/>
                    <input type="submit" value="OK"/> 
                </form>
        </td>
    </tr>
    <?php } ?>
  </tbody>
</table><?php }} ?>
