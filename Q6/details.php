<?php 
require_once("bank.php");
if(isset($_SESSION['account'])) {
echo "


<center>
 <h2>Create successfully!</h2>
 </center>
<table align='center'  border='1' cellspacing='0' width='400px'>

<tr>
<td>User Name:</td><td>".unserialize($_SESSION['account'])->name."</td>
</tr>
<tr>
<td>Address:</td><td>".unserialize($_SESSION['account'])->address."</td>
</tr>
<tr>
<td>Phone:</td><td>".unserialize($_SESSION['account'])->phone."</td>
</tr>
<tr>
<td>Email:</td><td>".unserialize($_SESSION['account'])->email."</td>
</tr>
<tr>
<td>Account Number:</td><td>".unserialize($_SESSION['account'])->account_number."</td>
</tr>
<tr>
<td>Account Type:</td><td>".unserialize($_SESSION['account'])->type."</td>
</tr>
<tr>
<td>Balance:</td><td>".unserialize($_SESSION['account'])->depositAmount."</td>
</tr>

</table>


";
} else {
echo "
<center>
<h1>Please create account!</h1>
</center>
";
}
?> 