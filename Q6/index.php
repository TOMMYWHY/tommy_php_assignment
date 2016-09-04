
<?php
session_start();
?>
<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <title></title>
    <style>
        a{text-decoration: none; color: white;}
        center{padding: 20px;}
        .header{width: 200px;height: 50px;background: #EEEEEE;line-height: 50px;margin: 30px;}
        .container{width: 440px; display: flex; flex-flow: wrap;margin: 0 auto; justify-content: center; }
        .box{width: 200px;height: 30px;background: #000000;color: white;margin: 10px;line-height: 30px;}


    </style>
</head>

<body>
<center>
    <div class="header"><h1>Bank System</h1></div>
    <hr style='margin: 50px 0;'>
    <div class="container">
        <a href="create.html"><div class="box">Create account</div></a>
        <a href="deposit.html"><div class="box">Deposit</div></a>
        <a href="withdraw.html"><div class="box">Withdraw</div></a>
        <a href="balance.php"><div class="box">Balance</div></a>
        <a href="logout.php"><div class="box">Sign out</div></a>
    </div>

</center>



</body>
</html>

<?php

include_once "details.php";

/**
 * Created by PhpStorm.
 * User: Tommy
 * Date: 16/7/23
 * Time: 下午4:06
 */
?>
