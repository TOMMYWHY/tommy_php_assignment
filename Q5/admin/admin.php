<?php
/**
 * Created by PhpStorm.
 * User: Tommy
 * Date: 16/7/18
 * Time: 下午3:07
 */

include "menu.php";

require_once "functions.php";
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title></title>
    <style type="text/css">
        table{margin: 60px auto;}
    </style>
</head>
<body>
<!--	<a href="add.html">add</a>-->
<table border="" cellspacing="0" cellpadding=""  style="text-align: center; width: 60%;" >
    <tr>
        <th>Id</th>
        <th>Product name</th>
        <th>Product price</th>
        <th>Brand</th>
        <th>Description</th>
        <th>Action</th>


    </tr>
    <?php
    connectDb();
    $result=mysql_query("SELECT * FROM product_tb JOIN brand_tb ON brand_tb.brand_id=product_tb.brand_id ORDER BY id ");
//echo 'aaa'.$result;
//    $data_length = mysql_num_rows($result);
    $data_length = arrNum($result);

    for ($i=0;$i<$data_length;$i++){
//        $result_arr=mysql_fetch_array($result);
        $result_arr = fetchArr($result);
//    print_r($result_arr);
        $id= $result_arr["id"];
        $product_name = $result_arr["product_name"];
        $product_price=$result_arr["product_price"];
        $brand_name = $result_arr["brand_name"];
        $description=$result_arr["description"];

        echo "	<tr>
				<td>$id</td>
				<td>$product_name</td>
				<td>$product_price</td>
				<td>$brand_name</td>
				<td>$description</td>
				<td><a href='edit.php?id=$id'> <input type='button' value='Edit'></a>
				<a href='remove.php?id=$id'> <input type='button' value='Remove'></a></td>
			</tr>
";
    }
    ?>

</table>
</body>
</html>
