<?php
require_once "connect.php";
$q1 = 'select username from members;';
$res = mysqli_query($conn, $q1);
$p = "";
while ($row = mysqli_fetch_array($res)) {
    $p = $p . "<tr><td>" . $row['username'] . "</td></tr>";
}
?>
<html>
    <head>
        <title>People</title>
        <style>
            body{
                text-align: center;
                background-color:#252525;
            }
            .container{
                background-color:#252525;
                border-radius: 8px;
                padding:5% 1%;
                display:inline-block;
                width:50%;
                position:absolute;
                top:50%;
                left:50%;
                transform:translate(-50%,-50%);
            }
            table *{
                font-size:2rem;
                color:white;
            }
            table{
                border:2px solid white;
                margin: 0 auto;
            }
            th,td{
                border-bottom:2px solid white;
            }
        </style>
    </head>
    <body style='text-align: center;'>
        <div class='container'>
            <table width='50%'>
                <tr><th>Username</th></tr>
                <tr><?php echo $p; ?></tr>
            </table>
        </div>
    </body>
</html>