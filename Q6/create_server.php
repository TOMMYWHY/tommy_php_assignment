<?php
    session_start();
	$user_name=$_POST['user_name'];
	$address=$_POST['address'];
	$phone=$_POST['phone'];
	$email=$_POST['email'];
	$account_number=$_POST['account_number'];
	$type=$_POST['type'];
	require_once("bank.php");
	$bankAccount = new bank();
	$bankAccount->set_name($user_name);
	$bankAccount->set_address($address);
	$bankAccount->set_phone($phone);
	$bankAccount->set_email($email);
	$bankAccount->set_account_number($account_number);
	$bankAccount->set_type($type);
	$bankAccount->set_depositAmount(0);
	$_SESSION['account'] = serialize($bankAccount);

echo "<center style='margin-top: 50px;'><h1>Account created successfully!</h1></center>
<table align='center' border='0' cellspacing='0' width='400px'>

<tr>
<td>User Name:</td><td>".$user_name."</td>
</tr>
<tr>
<td>Address:</td><td>".$address."</td>
</tr>
<tr>
<td>Phone:</td><td>".$phone."</td>
</tr>
<tr>
<td>Email:</td><td>".$email."</td>
</tr>
<tr>
<td>Account Number:</td><td>".$account_number."</td>
</tr>
<tr>
<td>Account Type:</td><td>".$type."</td>
</tr>
<tr>
<td ><a href='index.php'><input type='button' value='Back'></a></td>
</tr>
</table>"

?>