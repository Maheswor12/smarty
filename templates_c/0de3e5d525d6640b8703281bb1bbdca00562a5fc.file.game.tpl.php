<?php /* Smarty version Smarty-3.0.8, created on 2019-03-13 08:57:47
         compiled from "templates/admin/game.tpl" */ ?>
<?php /*%%SmartyHeaderCode:6403972145c88b7fb1d87d9-70165608%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0de3e5d525d6640b8703281bb1bbdca00562a5fc' => 
    array (
      0 => 'templates/admin/game.tpl',
      1 => 1552463864,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '6403972145c88b7fb1d87d9-70165608',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php $_template = new Smarty_Internal_Template("header.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
$_template->assign('title','AdminCafe'); echo $_template->getRenderedTemplate(); $_template->rendered_content = null;?><?php unset($_template);?>

<form>
  <div class="form-group">
    <label for="email">Email address:</label>
    <input type="email" class="form-control" id="email">
  </div>
  <div class="form-group">
    <label for="pwd">Password:</label>
    <input type="password" class="form-control" id="pwd">
  </div>
  <div class="form-group form-check">
    <label class="form-check-label">
      <input class="form-check-input" type="checkbox"> Remember me
    </label>
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
<?php $_template = new Smarty_Internal_Template("footer.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate(); $_template->rendered_content = null;?><?php unset($_template);?>
