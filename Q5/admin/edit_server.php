<?php
/**
 * Created by PhpStorm.
 * User: Tommy
 * Date: 16/7/12
 * Time: 下午5:25
 */
require_once "functions.php";
extract($_POST);
if (empty($id)){
    die("id is empty");
}


$id = intval($_POST["id"]);
$product_name=$_POST['product_name'];
$product_price =$_POST['product_price'];
$brand_id_select =$_POST['brand_id_select'];
$description = $_POST['description'];

connectDb();
mysql_query("UPDATE product_tb SET product_name='$product_name', product_price='$product_price',
brand_id='$brand_id_select',description='$description' WHERE id=$id ");

if (mysql_error()){
    echo mysql_error();
}else{
    header("Location:admin.php");
}









