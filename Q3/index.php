<?php
/**
 * Created by PhpStorm.
 * User: Tommy
 * Date: 16/7/12
 * Time: 上午9:34
 */
include "menu.php";
require_once "function.php";
?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title></title>
		<style type="text/css">
			table{margin: 60px auto;}
			.btns a {font-size: 10px;}
			/*td{display: flex;justify-content: center;align-items: center;}*/
		</style>
	</head>
	<body>
<!--	<a href="add.html">add</a>-->
		<table border="" cellspacing="0" cellpadding=""  style="text-align: center; width: 60%;" >
			<tr>
				<th>Id</th>
				<th>Name</th>
				<th>Address</th>
				<th>Phone</th>
				<th>Email</th>
				<th>Action</th>


			</tr>
<?php
$conn=connectDb();
mysql_select_db("q3_db",$conn);
$result=mysql_query("SELECT * FROM address_book",$conn);
$data_length = mysql_num_rows($result);

for ($i=0;$i<$data_length;$i++){
    $result_arr=mysql_fetch_array($result);
//    print_r($result_arr);
	$id= $result_arr["id"];
	$name = $result_arr["name"];
	$address=$result_arr["address"];
	$phone = $result_arr["phone"];
	$email=$result_arr["email"];

	echo "	<tr>
				<td>$id</td>
				<td>$name</td>
				<td>$address</td>
				<td>$phone</td>
				<td>$email</td>
				<td class='btns'><a href='edit.php?id=$id'> <input type='button' value='Edit'></a>
				<a href='remove.php?id=$id'> <input type='button' value='Remove'></a></td>
			</tr>
";
}
?>

		</table>
	</body>
</html>
