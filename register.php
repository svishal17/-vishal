<?php

require_once 'connect.php';
$username = $_POST['username'];
$password = sha1($_POST['password']);
$phno = $_POST['phno'];
$q1 = "select * from members where username='$username' ";
if (!$res = mysqli_query($conn, $q1)) {
    echo "<script>alert('Error');</script>";
} else {
    if (mysqli_num_rows($res) > 0) {
        echo "<script>alert('You are already Registered. Please Login.');location='login.php';</script>";
    } else {
        $q2 = "insert into members values('$username','$password','$phno');";
        if (!mysqli_query($conn, $q2)) {
            echo "<script>alert('Some error in registering. Try again.');</script>";
        } else {
            echo "<script>alert('Successfully Registered. Please Login.');location='login.php'</script>";
        }
    }
}