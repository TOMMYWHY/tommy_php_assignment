<?php

session_start();
require_once("bank.php");
if(isset($_SESSION['account'])){
$account = unserialize($_SESSION['account']);

echo "

<center style='margin-top: 50px;'>
<h2>balance</h2><br>
The account balance is:" .$account->depositAmount."<br><br><br>

<a href='index.php'>Back</a>
</center>
";
}
else{
	echo "<script>window.location.href='index.php';alert('Please create account')</script>";
}


?>