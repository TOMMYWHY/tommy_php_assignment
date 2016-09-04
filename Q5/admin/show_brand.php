<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <style type="text/css">
    	table{width: 200px; margin: 50px auto;}
    </style>
</head>
<body>
<?php
include "menu.php";
?>


<table border="" cellspacing="0" cellpadding="">
	<tr>
		<th>Brand ID</th>
		<th>Brand name</th>
	</tr>


<?php
//include "menu.php";
require_once "functions.php";
connectDb();
//$result = mysql_query("SELECT * FROM brand_tb");
$result=queryTb_Brand();
//$result_length= mysql_num_rows($result);
$result_length = arrNum($result);
for ($i=0;$i<$result_length;$i++ ){
//     $result_arr= mysql_fetch_array($result);
    $result_arr =fetchArr($result);

    $id= $result_arr["brand_id"];
    $name = $result_arr["brand_name"];

    echo "	<tr>
				<td>$id</td>
				<td>$name</td>
			</tr>
";
}
?>
</table>

<center>
    <form action="add_brand.php" method="get" >
Brand name:<input type="text" name="brandName" id="" />
<input type="submit" name="submit" id="" value="Submit" />

    </form>
</center>
</body>
</html>

<?php
/**
 * Created by PhpStorm.
 * User: Tommy
 * Date: 16/7/18
 * Time: 下午6:29
 */
//require_once "functions.php";
////extract($_GET);
//$brand_name= $_GET['brandName'];
//connectDb();
//$add_brand = "INSERT INTO brand_tb (brand_name) VALUES ('$brand_name')";
//
//if (!empty($brand_name)){
//    mysql_query($add_brand);
//}