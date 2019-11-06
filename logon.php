<?php
require_once 'connect.php';
$username=$_POST['username'];
session_start();

$password=sha1($_POST['password']);
$q1="select * from members where username='$username' and password='$password';";
$res=mysqli_query($conn,$q1);
if(mysqli_num_rows($res)==0){
    echo "<script>alert('Wrong Username or Password. Please try again.');location='login.php';</script>";
}
else{
    $_SESSION['user']=$username;
    
    header('location:success.php');
}
?>