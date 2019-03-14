<?php /* Smarty version Smarty-3.0.8, created on 2019-03-08 13:48:16
         compiled from "templates/insert.tpl" */ ?>
<?php /*%%SmartyHeaderCode:10880881415c8264904ddf19-96454899%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'eca2ceb519bd8842ada61f52e097bfdf82d0cb16' => 
    array (
      0 => 'templates/insert.tpl',
      1 => 1552049294,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '10880881415c8264904ddf19-96454899',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php $_template = new Smarty_Internal_Template("header.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
$_template->assign('title','insert'); echo $_template->getRenderedTemplate(); $_template->rendered_content = null;?><?php unset($_template);?>
 <form method="post" action="insert.php">    
 <table width="550" border="1">   
<div>
    <tr>
        <td>
           <div>Name : 
        </td>
        <td>       
           <input type="text" name="fullname" ></div>
        </td>
    </tr> 
    <tr>
         <td>    
           <div>User Name :
          </td>  
          <td>  
            <input type="text" name="username" ></div>
           </td>  
    </tr>
    <tr>
            <td>  
           <div>Password :
           </td>  
           <td>
              <input type="text" name="password" ></div>
           </td>  
    </tr>
    <tr>
        <td>  
           <input type="submit" name="submit" value="Submit" >
        </td>
    </tr>  
</table>
 </form>
<?php $_template = new Smarty_Internal_Template("footer.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate(); $_template->rendered_content = null;?><?php unset($_template);?>
