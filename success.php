<?php session_start(); ?>
<!doctype HTML>
<html>
    <head>
        <title>Welcome</title>
        <style>
            body{
                background-color:#252525;
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
            .container{
                border-radius: 4px;
                padding:5% 1%;
                padding-top:1%;
            }
        </style>
    </head>
    <body>
        <div class='container'>
            <h1 style="color:white;font-size:10rem;font-weight: 500;">Welcome <?php echo $_SESSION['user']; ?>.</h1>
            <form action='logout.php' method='post'>
                <center> <input type='submit' value='Logout'></center>
            </form>
        </div>
    </body>
</html>