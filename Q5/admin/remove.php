<?php
/**
 * Created by PhpStorm.
 * User: Tommy
 * Date: 16/7/12
 * Time: 下午5:56
 */
require_once "functions.php";

if (empty($_GET["id"])) {
    die("id is not define!");
}
connectDb();
//mysql_select_db("q3_db",$conn);

$id = intval($_GET["id"]);

mysql_query("DELETE FROM product_tb WHERE id=$id ");

if (mysql_error()){
    die("fail to remove!");
}else{
    header("Location:admin.php");
}