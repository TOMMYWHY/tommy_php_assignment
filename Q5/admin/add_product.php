<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <style>
        form{
            width:1000px; margin: 0 auto}
    </style>
</head>
<body>
<?php
include "menu.php";
?>
<div style="height: 30px;"></div>
<form action="add_product.php" method="get">
Product name <input type="text" name="product_name">
Product price <input type="text" name="product_price">


    Brand
        <select name="brand_id_select">
        <?php
        require_once "functions.php";
        connectDb();
        $result = queryTb_Brand();
        $result_length = arrNum($result);

        for($i=0;$i<$result_length;$i++){
            $result_arr =fetchArr($result);
            $brand_id= $result_arr["brand_id"];
            $brand_name = $result_arr["brand_name"];

            echo"<option value='$brand_id'>".$brand_name."</option>" ;
        }
        ?>
	</select>

Description<input type="text" name="description">
    <input type="submit" name="submit" value="Submit">
</form>
</body>
</html>

<?php
/**
 * Created by PhpStorm.
 * User: Tommy
 * Date: 16/7/18
 * Time: 下午6:31
 */

if(isset($_GET["submit"]))  {

    extract($_GET);
    
    if (empty($product_name)&&empty($product_price)){
        die('please enter product name and product price first!');
    }


    $brand_id_select=$_GET['brand_id_select'];
    $add_product = "INSERT INTO product_tb(product_name,product_price,brand_id,description)
                            VALUES ('$product_name','$product_price','$brand_id_select','$description')";

//if (empty($brand_name)){
//    die("brand name is empty");
//
//}
    $insert_data = mysql_query("$add_product");

    if ($insert_data){
        echo "
<h2>
insert successful!<br>
2s go back to admin.php!
</h2>
";
        header("Refresh:2;url=admin.php");
    }

}


