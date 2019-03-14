<?php /* Smarty version Smarty-3.0.8, created on 2019-03-09 11:37:23
         compiled from "templates/view.tpl" */ ?>
<?php /*%%SmartyHeaderCode:18902796145c8397634ddb53-62915873%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '301e85eb591ae505914151048f37e8025050d705' => 
    array (
      0 => 'templates/view.tpl',
      1 => 1552067992,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '18902796145c8397634ddb53-62915873',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php  $_config = new Smarty_Internal_Config("test.conf", $_smarty_tpl->smarty, $_smarty_tpl);$_config->loadConfigVars("setup", 'local'); ?>
<?php $_template = new Smarty_Internal_Template("header.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
$_template->assign('title','view'); echo $_template->getRenderedTemplate(); $_template->rendered_content = null;?><?php unset($_template);?>
<h2>Basic HTML Table</h2>
<a href="insert.php">Add Usersss</a>
<table width="550" border="border: 1px solid black">
  <tr>
  <th>S.N</th>
    <th>Firstname</th>
    <th>Username</th> 
    <th>Password</th>
    <th colspan="2">Action</th>
  </tr>
  <?php unset($_smarty_tpl->tpl_vars['smarty']->value['section']['i']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['name'] = 'i';
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop'] = is_array($_loop=$_smarty_tpl->getVariable('users')->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['total']);
?>
  <tr>
  <td><?php echo $_smarty_tpl->getVariable('smarty')->value['section']['i']['rownum'];?>
</td>
    <td><?php echo $_smarty_tpl->getVariable('users')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['fullname'];?>
</td>
    <td><?php echo $_smarty_tpl->getVariable('users')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['username'];?>
</td>
    <td><?php echo $_smarty_tpl->getVariable('users')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['password'];?>
</td>
    <td><a href="view.php?del=<?php echo $_smarty_tpl->getVariable('users')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['user_id'];?>
" onclick="return confirm('Are you sure you want to delete this item?');">Delete</a> |
     <a href="edit.php?id=<?php echo $_smarty_tpl->getVariable('users')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['user_id'];?>
">Edit</a></td>
  </tr>
  <?php endfor; endif; ?>
</table>
<?php $_template = new Smarty_Internal_Template("footer.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate(); $_template->rendered_content = null;?><?php unset($_template);?>