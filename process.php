<?php
require 'libs/Smarty.class.php';
$smarty = new Smarty;
include("config.php");
if($_SERVER['REQUEST_METHOD']=="POST")
{
$table = $_POST['form_name'];//database table name is available in $table
unset($_POST['form_name']);
$data=$_POST;
//var_dump ($data);
if(isset($data['id']))
{
    $id = $data['id'];
    unset($data['id']);//array bta id remove 
    $set = "";
foreach($data as $_key => $_value)
{
    $set .= "`$_key` = '$_value',";
}
$set = rtrim($set, ',');

$query = "Update $table set $set where {$table}_id=$id";
echo $query;
}
else 
{





$fields=$values=array();
foreach(array_keys($data) as $key)
{
    $fields[] = "`$key`";
    $values[]="'".mysqli_real_escape_string($conn,$data[$key])."'";
}
$fields=implode(",",$fields);//implode is used to convert the array to stringecho
//echo $fields;
$values = implode(",",$values);
//echo $values;
$query = "Insert into $table ($fields) VALUES ($values)";

} 
//echo $query;
$result = mysqli_query($conn, $query);
//echo $result;
if($result)
{
    echo "success";

} else{
    echo "failed";
}
}


?>
