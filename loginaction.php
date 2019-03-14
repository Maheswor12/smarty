<?php
require 'libs/Smarty.class.php';
$smarty = new Smarty;
include("config.php");
if(!session_start())
{
    session_start();
}

$username = mysqli_real_escape_string($conn, $_POST['username']);
$password = mysqli_real_escape_string($conn, $_POST['password']);
$query="select * from users where username='$username' and password='$password'";
//echo $query;
$result=mysqli_query($conn, $query);
//var_dump ($result);
$row= mysqli_fetch_assoc($result);
if($row)
{
    $_SESSION['level']=$row['level'];
    $_SESSION['uid'] = $row['user_id']; 
if($row['level']==1)
{
   
    header("location:admin_index.php");
}
else if($row['level']==2)
{
    
    header("location:user_index.php");
}
 else
 {
     header("location:index.php?type=error");

}
}
?>