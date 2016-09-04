<?php

session_start();
require_once("bank.php");
if(isset($_SESSION['account'])){
if($_REQUEST['deposit']<0){
	echo "<script>alert('The input value must bigger than 0');  
	window.location.href='deposit.html'</script>";
} 
else {
$account = unserialize($_SESSION['account']);
$account->depositAmount = $account->depositAmount + $_REQUEST['deposit'] ;
$_SESSION['account'] =  serialize($account);
echo "

<center style='margin-top: 50px;'>
<h2>Deposit successfully!</h2>
<br>
Account Balance is:" .unserialize($_SESSION['account'])->depositAmount."<br><br><br>

<a href='index.php'>Back</a>
</center>
	";
}

}
else{
	echo "<script>window.location.href='index.php';alert('Please create account')</script>";
}

?>