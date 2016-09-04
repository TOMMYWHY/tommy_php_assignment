<?php
/**
 * Created by PhpStorm.
 * User: Tommy
 * Date: 16/7/18
 * Time: 下午9:27
 */
require_once "functions.php";
//extract($_GET);
$brand_name= $_GET['brandName'];
connectDb();
$add_brand = "INSERT INTO brand_tb(brand_name) VALUES ('$brand_name')";

    if (!empty($brand_name)){
     mysql_query("$add_brand");
    }else{
        die("brand name is empty");
    }
    header("location:show_brand.php");

