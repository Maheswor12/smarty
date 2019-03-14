<?php /* Smarty version Smarty-3.0.8, created on 2019-03-08 18:58:24
         compiled from "templates/edit.tpl" */ ?>
<?php /*%%SmartyHeaderCode:16007276205c82ad403b5a01-79847009%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '87c29b8fd06db80504ce756cfc5f14b4d0eee4be' => 
    array (
      0 => 'templates/edit.tpl',
      1 => 1552067897,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '16007276205c82ad403b5a01-79847009',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php $_template = new Smarty_Internal_Template("header.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
$_template->assign('title','Update'); echo $_template->getRenderedTemplate(); $_template->rendered_content = null;?><?php unset($_template);?>
<h1>Edit page</h1> 
 <form method="post" action="edit.php">   
 <input type="hidden" name="user_id" value="<?php echo $_smarty_tpl->getVariable('users')->value['user_id'];?>
">
 <table width="550" border="1">   
<div>
    <tr>
        <td>
           <div>Name : 
        </td>
        <td>       
           <input type="text" name="fullname" value="<?php echo $_smarty_tpl->getVariable('users')->value['fullname'];?>
"></div>
        </td>
    </tr> 
    <tr>
         <td>    
           <div>User Name :
          </td>  
          <td>  
            <input type="text" name="username" value="<?php echo $_smarty_tpl->getVariable('users')->value['username'];?>
" ></div>
           </td>  
    </tr>
    <tr>
            <td>  
           <div>Password :
           </td>  
           <td>
              <input type="text" name="password" value="<?php echo $_smarty_tpl->getVariable('users')->value['password'];?>
"></div>
           </td>  
    </tr>
    <tr>
        <td>  
           <input type="submit" name="submit" value="Edit Record" >
        </td>
    </tr>  
</table>
 </form>
<?php $_template = new Smarty_Internal_Template("footer.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate(); $_template->rendered_content = null;?><?php unset($_template);?>
