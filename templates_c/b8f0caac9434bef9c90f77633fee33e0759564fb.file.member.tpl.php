<?php /* Smarty version Smarty-3.0.8, created on 2019-03-13 10:22:59
         compiled from "templates/admin/member.tpl" */ ?>
<?php /*%%SmartyHeaderCode:12716047285c88cbf31df824-06824791%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b8f0caac9434bef9c90f77633fee33e0759564fb' => 
    array (
      0 => 'templates/admin/member.tpl',
      1 => 1552468974,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '12716047285c88cbf31df824-06824791',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php $_template = new Smarty_Internal_Template("header.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
$_template->assign('title','AdminCafe'); echo $_template->getRenderedTemplate(); $_template->rendered_content = null;?><?php unset($_template);?>
<h1>Members</h1>
<form id="members">
<input type="hidden" name="form_name" value="members">
    <div class="form-group">
      <label for="">First Name</label>
      <input type="text" class="form-control" name="firstname" id="" aria-describedby="emailHelpId" placeholder="Please Enter First Name" required>
      <!-- <small id="emailHelpId" class="form-text text-muted">Help text</small> -->
    </div>
    <div class="form-group">
      <label for="">Last Name</label>
      <input type="text" class="form-control" name="lastname" id="" aria-describedby="emailHelpId" placeholder="Please Enter Last Name" required>
      <!-- <small id="emailHelpId" class="form-text text-muted">Help text</small> -->
    </div>
    <div class="form-group">
      <label for="">Email</label>
      <input type="email" class="form-control" name="email" id="" aria-describedby="emailHelpId" placeholder="Please Enter Last Name" required >
      <!-- <small id="emailHelpId" class="form-text text-muted">Help text</small> -->
    </div>
    <div class="form-group">
      <label for="">Number</label>
      <input type="number" class="form-control" name="number" id="" aria-describedby="emailHelpId" placeholder="Please Enter Number" required>
      <!-- <small id="emailHelpId" class="form-text text-muted">Help text</small> -->
    </div>
    <div class="form-group">
      <label for="">Address</label>
      <input type="text" class="form-control" name="address" id="" aria-describedby="emailHelpId" placeholder="Please Enter User Name" required>
      <!-- <small id="emailHelpId" class="form-text text-muted">Help text</small> -->
    </div>
  
    <button type="submit" class="btn btn-primary">Submit</button>
    </form>


<table width="550" border="border: 1px solid black">
  <tr>
    <th>S.N</th>
    <th>Firstname</th>
    <th>LastName</th> 
    <th>Email</th>
    <th>Number</th> 
    <th>Address</th>
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
    <td><?php echo $_smarty_tpl->getVariable('users')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['lastname'];?>
</td>
    <td><?php echo $_smarty_tpl->getVariable('users')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['email'];?>
</td>
    <td><?php echo $_smarty_tpl->getVariable('users')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['number'];?>
</td>
    <td><?php echo $_smarty_tpl->getVariable('users')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['address'];?>
</td>
    <td><a href="view.php?del=<?php echo $_smarty_tpl->getVariable('users')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['members_id'];?>
" onclick="return confirm('Are you sure you want to delete this item?');">Delete</a> |
     <a href="edit.php?id=<?php echo $_smarty_tpl->getVariable('users')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['members_id'];?>
">Edit</a></td>
   </tr>
   <?php endfor; endif; ?>
 </table>
<?php $_template = new Smarty_Internal_Template("footer.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate(); $_template->rendered_content = null;?><?php unset($_template);?>
