<?php
session_start();
if (isset($_SESSION['user'])) {
    header('location:success.php');
}
?>
<!doctype HTML>
<html>
    <head>
        <title>Register</title>
        <style>
            body{
                text-align: center;
                background-color:#252525;
            }
            .container{             
                position:absolute;
                top:50%;
                left:50%;
                transform: translate(-50%,-50%);
                text-align: center;
                height:70%;
                width:33%;
                border-radius: 5px;
                padding:5% 1%;
                padding-top:0;
            }
            .container *{
                display:block;
                margin:7% auto;
            }
            .container input[type='text'],.container input[type='password']{
                border:1px solid black;
                outline:none;
                padding:14px 10px;
                color:black;
                width:60%;
                border-radius:5px;  
                background-color: #daf1f9;
            }
            .c{
                margin-top:10%;     
            }
            input[type='submit']{
                outline:none;
                padding:14px 10px;
                width:30%;
                border-radius: 5px;
                border:1px solid black;
            }
            input[type='submit']:hover{
                background:#3c9d9b;
                transition:0.3s;
            }
        </style>
    </head>
    <body>
        <div class="container">
            <h1 style="color:white;font-size:4rem;font-weight: 500;">REGISTER</h1>
            <form action="register.php" method="post">
                <input class='c' type="text" name="username" placeholder="Username" required autofocus>
                <input type="text" name="phno" placeholder="Phone Number" required pattern="[0-9]{10}">
                <input type="password" name="password" placeholder="Password" required>
                <input type="submit" value="Register">
            </form>
            <form action='login.php' method='post'>
                <span style='color:#3c9d9b;font-size:2rem'>Already Registered?</span>
                <input type='submit' value='Login'>
                <a style='color:#3c9d9b;font-size:1.5rem' href="people.php">View people who have already registered</a>
            </form>
        </div>
    </body>
</html>