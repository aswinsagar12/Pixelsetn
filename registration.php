<?php
session_start();
header('location:login.php');
$connection=mysqli_connect('localhost','root','');


mysqli_select_db($connection,'loginandregistrationform');

$username=$_POST['user'];
$emailid=$_POST['email'];
$password=$_POST['password'];

$select="select * from register_table where username='$username'";
$result=mysqli_query($connection,$select);
$num=mysqli_num_rows($result);
if($num==1)
{
    echo" user already exists";
}
else
{
    $reg="INSERT INTO register_table(username,email,password) VALUES('$username','$emailid','$password')";
    mysqli_query($connection,$reg);
}
?>