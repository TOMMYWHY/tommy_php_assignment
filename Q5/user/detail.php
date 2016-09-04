<?php
include_once "show.php";
?>


<html>
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <style type="text/css">
        table{margin: 20px auto;}
        h2{margin-left:300px; }
    </style>
</head>
<body>

<table border="" cellspacing="0" cellpadding=""  style="text-align: center; width: 60%;" >
    <tr>
        <th>Id</th>
        <th>Product name</th>
        <th>Product price</th>

        <th>Description</th>

    </tr>



<?php
/**
 * Created by PhpStorm.
 * User: Tommy
 * Date: 16/7/19
 * Time: 下午6:31
 */
require_once "functions.php";
$brand_id1= intval( $_GET['brand_id_select']);
connectDb();
$result2= mysql_query("SELECT * FROM brand_tb WHERE brand_id=$brand_id1");
$result_arr2=fetchArr($result2);
$product_name2 = $result_arr2["brand_name"];
echo "<h2>Brand name:".$product_name2."</h2>";


//$data ="SELECT id,brand_tb.brand_id,brand_name, product_name,product_price,description FROM
//brand_tb,product_tb WHERE brand_tb.brand_id = product_tb.brand_id ";

$data1 ="SELECT * FROM product_tb WHERE product_tb.brand_id = $brand_id1 ";
//$data1 = "SELECT * FROM product_tb AND brand_tb  WHERE product_tb.brand_id ='$brand_id1'";
$result1= mysql_query($data1);
$data_length1 = arrNum($result1);
for ($i=0;$i<$data_length1;$i++){
//        $result_arr=mysql_fetch_array($result);
    $result_arr1 = fetchArr($result1);
//    print_r($result_arr);
    $id1= $result_arr1["id"];
    $product_name1 = $result_arr1["product_name"];
    $product_price1=$result_arr1["product_price"];
//    $brand_name1 = $result_arr["brand_name"];
//    $brand_id1 = $result_arr["brand_id"];
    $description1=$result_arr1["description"];

    echo "	<tr>
				<td>$id1</td>
				<td>$product_name1</td>
				<td>$product_price1</td>
             
				<td>$description1</td>
			
			</tr>
";
}
?>



</body>
</html>

