<?php /* Smarty version Smarty-3.0.8, created on 2019-03-11 15:49:49
         compiled from ".\templates\nav.tpl" */ ?>
<?php /*%%SmartyHeaderCode:4277043425c86758d71ae69-12046987%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '78dfd564017866b2a07d32220e5f711a454b3ecb' => 
    array (
      0 => '.\\templates\\nav.tpl',
      1 => 1552152561,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '4277043425c86758d71ae69-12046987',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>

<nav class="navbar navbar-expand-md bg-dark navbar-dark">
  <a class="navbar-brand" href="#">Hak3rz</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="collapsibleNavbar">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" href="#">About</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Contact</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Mission</a>
      </li>    
      <div class="login">
        <form method="post" action="loginaction.php">
          <input type="text" placeholder="Enter Username" name="username"  required>
          <input type="password" placeholder="Enter Password" name="password"  required>
          <input type="submit" name="submit" value="Login" class="btn btn-success">
        </form>
      </div>
    </li>    
  </ul>
</div>  
</nav>
