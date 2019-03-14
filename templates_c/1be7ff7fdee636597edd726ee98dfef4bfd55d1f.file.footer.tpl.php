<?php /* Smarty version Smarty-3.0.8, created on 2019-03-14 06:20:25
         compiled from ".\templates\footer.tpl" */ ?>
<?php /*%%SmartyHeaderCode:19611844895c89e4997d0fc7-39746045%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1be7ff7fdee636597edd726ee98dfef4bfd55d1f' => 
    array (
      0 => '.\\templates\\footer.tpl',
      1 => 1552540820,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '19611844895c89e4997d0fc7-39746045',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>

<script src="assets/jquery.js"></script>
 <script src="assets/js/bootstrap.js"></script>
 <!-- for sweet alert -->
 <script src="assets/sweetalert.min.js"></script>
<script src="assets/feather.min.js"></script>

 <!-- Icons -->
    <script src="https://unpkg.com/feather-icons/dist/feather.min.js"></script>
    <script>
      feather.replace()
    </script>
    <script>
    $(document).ready(function(){         
    $('#register').submit(function(event){
        //alert('document id ready');    
        event.preventDefault();
        var formData = $('#register').serialize();              
        $.ajax({
          type:"post",
          url:"register.php",
          data: formData,
          dataType: "text",
          success: function(response){
            console.log(response);
           
          }
        });
    });
     });
    </script>
    </body>
    </html>