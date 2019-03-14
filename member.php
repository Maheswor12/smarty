<?php
include("config.php");
require 'libs/Smarty.class.php';
$smarty = new Smarty;//create a object
if($_SERVER['REQUEST_METHOD']=="POST")
{
    $query="INSERT INTO `members`(`firstname`, `lastname`, `email`, `number`, `address`) VALUES ('".$_POST['firstname']."','".$_POST['lastname']."','".$_POST['email']."','".$_POST['number']."','".$_POST['address']."')";
    // echo $query;
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
$id = null;
// for edit
if($_SERVER['REQUEST_METHOD']=="GET")
{
    if(isset($_GET['edit'])){

        $edit = $_GET['edit'];
        $sql= "select * from members where members_id='$edit'";
$res=mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($res);
$smarty->assign('id',$edit);

$smarty->assign('user',$row);
    }

}


// if(isset($_POST['submit'])){
//     $id=$_POST['edit'];
//  $query="UPDATE `user` SET `fullname`='".$_POST['fullname']."',`username`='".$_POST['username']."',`password`='".$_POST['password']."' WHERE user_id=$id";
//  $result=mysqli_query($conn, $query);
// if($result){
//     echo "success";
// }
// else
// {
//     echo "false";
// }
// // header("location:view.php");
// }
//for retrieve and delete
$query = "select * from members";
$result = mysqli_query($conn, $query);
while($row = mysqli_fetch_assoc($result))
{
  $data[]=$row;
}
if($_SERVER['REQUEST_METHOD']=="GET")
{
  if(isset($_GET['del']))
  {
    //var_dump ($_GET['del']);
    $del= "delete from members where members_id ='".$_GET['del']."'" ;
    $res = mysqli_query($conn, $del);
    header("location:member.php");
  }
}


$smarty->assign('users',$data);

$smarty->display('templates/admin/members.tpl');
?>
   
