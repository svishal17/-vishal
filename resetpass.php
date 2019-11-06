<?php

require_once 'connect.php';
$username = $_POST['username'];
$password = sha1($_POST['password']);
$phno = $_POST['phno'];
$q1 = "select * from members where username='$username' and phno='$phno';";
$res = mysqli_query($conn, $q1);
if (mysqli_num_rows($res) == 0) {
    echo "<script>alert('Wrong Username or Phone Number. Please try again.');location='reset.php';</script>";
} else {
    $q2 = "update members set password='$password' where username='$username' and phno='$phno';";
    if (!mysqli_query($conn, $q2)) {
        echo "<script>alert('Some Error. Please try again.');location='reset.php';</script>";
    } else {
        echo "<script>alert('Password Successfully Reset. Please Login.');location='login.php';</script>";
    }
}