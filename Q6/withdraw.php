<?php

session_start();
require_once("bank.php");
if(isset($_SESSION['account'])){
	if(unserialize($_SESSION['account'])->depositAmount - $_REQUEST['withdraw']< 0){
		echo "<script>alert('The input value must bigger than Account balance');  
		window.location.href='withdraw.html'</script>";
	} else {
		$account = unserialize($_SESSION['account']);
		$account->depositAmount = $account->depositAmount - $_REQUEST['withdraw'] ;
		$_SESSION['account'] =  serialize($account);
		echo "
		
		<center style='margin-top: 50px;'>
		<h2>Withdraw successfully!</h2><br>
		Account Balance is:" .unserialize($_SESSION['account'])->depositAmount."<br><br><br>
		
		<a href='index.php'>Back</a>
		</center>
		";

		}
} 	else{
	echo "<script>window.location.href='index.php';alert('Please create account')</script>";
	}


?>