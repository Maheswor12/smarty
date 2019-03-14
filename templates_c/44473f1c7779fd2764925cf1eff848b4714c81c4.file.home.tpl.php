<?php /* Smarty version Smarty-3.0.8, created on 2019-03-09 18:19:57
         compiled from "templates/home.tpl" */ ?>
<?php /*%%SmartyHeaderCode:14358460875c83f5bded24a3-89406141%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '44473f1c7779fd2764925cf1eff848b4714c81c4' => 
    array (
      0 => 'templates/home.tpl',
      1 => 1552151892,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '14358460875c83f5bded24a3-89406141',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>

<section class="register-block">
  <div class="container">
   <div class="row">
    <div class="col-md-4 register-sec">
      <h2 class="text-center">Register Now</h2>
      <form class="register-form" method="post" action="register.php">
        <div class="form-group">
          <label for="exampleInputEmail1" class="text-uppercase">Username</label>
          <input type="text" class="form-control" placeholder="Please Enter UserName" required name="username">
        </div>
        <div class="form-group">
          <label for="exampleInputEmail1" class="text-uppercase">Email</label>
          <input type="email" class="form-control" placeholder="Please Enter Email" name="email" required>
        </div>

        <div class="form-group">
          <label for="exampleInputPassword1" class="text-uppercase">Password</label>
          <input type="password" class="form-control" placeholder="Please Enter Password" name="password" required>
        </div>
        <button type="submit" class="btn btn-register float-right" name="submit">Submit</button>
      </form>
    </div>
    <div class="col-md-8 banner-sec">
      <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
       <ol class="carousel-indicators">
        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
      </ol>
      <div class="carousel-inner" role="listbox">
        <div class="carousel-item active">
          <img class="d-block img-fluid" src="assets/images/2.jpg" alt="First slide">
          <div class="carousel-caption d-none d-md-block">
            <div class="banner-text">
              <h2>This is Heaven</h2>
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation</p>
            </div>	
          </div>
        </div>
        <div class="carousel-item">
          <img class="d-block img-fluid" src="assets/images/6.jpg" alt="Second slide">
          <div class="carousel-caption d-none d-md-block">
            <div class="banner-text">
              <h2>This is Heaven</h2>
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation</p>
            </div>	
          </div>
        </div>
        <div class="carousel-item">
          <img class="d-block img-fluid" src="assets/images/4.jpg" alt="Third slide">
          <div class="carousel-caption d-none d-md-block">
            <div class="banner-text">
              <h2>This is Heaven</h2>
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation</p>
            </div>	
          </div>
        </div>
      </div>	   

    </div>
  </div>
</div>
</div>
</section>