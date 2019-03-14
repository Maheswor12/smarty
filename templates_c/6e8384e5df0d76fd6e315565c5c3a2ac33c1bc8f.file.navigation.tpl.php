<?php /* Smarty version Smarty-3.0.8, created on 2019-03-13 09:42:00
         compiled from ".\templates\admin/navigation.tpl" */ ?>
<?php /*%%SmartyHeaderCode:18089332905c88c2584b7642-41033865%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6e8384e5df0d76fd6e315565c5c3a2ac33c1bc8f' => 
    array (
      0 => '.\\templates\\admin/navigation.tpl',
      1 => 1552464614,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '18089332905c88c2584b7642-41033865',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
 <nav class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0">
      <a class="navbar-brand col-sm-3 col-md-2 mr-0" href="admin_index.php">Administrator</a>
      <input class="form-control form-control-dark w-100" type="text" placeholder="Search" aria-label="Search">
      <ul class="navbar-nav px-3">
        <li class="nav-item text-nowrap">
          <a class="nav-link" href="signout.php">Sign out</a>
        </li>
      </ul>
    </nav>

    <div class="container-fluid">
      <div class="row">
        <nav class="col-md-2 d-none d-md-block bg-light sidebar">
          <div class="sidebar-sticky">
            <ul class="nav flex-column">
            <li class="nav-item">
                <a class="nav-link" href="member.php">
                  <span data-feather="shopping-cart"></span>
                  Member
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="">
                  <span data-feather="file"></span>
                  Movies
                </a>
              </li>
              
              <li class="nav-item">
                <a class="nav-link" href="">
                  <span data-feather="layers"></span>
                  Logout
                </a>
              </li>
            </ul>

          </div>
        </nav>
        <main role="main" class="col-md-9 ml-sm-auto col-lg-10 pt-3 px-4">
       
        </main>
      </div>
    </div>
