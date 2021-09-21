<?php
session_start();

$connection=mysqli_connect('localhost','root','');


mysqli_select_db($connection,'loginandregistrationform');

$emailid=$_POST['email'];
$password=$_POST['password'];

$select="select * from register_table where email='$emailid' && password='$password'";
$result=mysqli_query($connection,$select);
$num=mysqli_num_rows($result);
if($num == 1)
{

    header('location:home.php');
}
else
{

    header('location:login.php');
}
?>

