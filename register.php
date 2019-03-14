<?php
 require 'libs/Smarty.class.php';
 $smarty = new Smarty;
include("config.php");
if($_SERVER['REQUEST_METHOD'] == "POST")
{
      $query="INSERT INTO `users`(`username`, `email`, `password`,`level`) VALUES ('".$_POST['username']."','".$_POST['email']."','".$_POST['password']."',2)";
      $result = mysqli_query($conn, $query);
      if($result)
      {
            echo "success";
           
      }
      else
      {
            echo "failed";
      }
}
$smarty->display('templates/index.tpl');
?>