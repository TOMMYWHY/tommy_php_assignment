<?php
/**
 * Created by PhpStorm.
 * User: Tommy
 * Date: 16/7/12
 * Time: 下午5:56
 */
require_once "function.php";

if (empty($_GET["id"])) {
    die("id is not define!");
}
$conn=connectDb();
mysql_select_db("q3_db",$conn);

$id = intval($_GET["id"]);

mysql_query("DELETE FROM address_book WHERE id=$id ");

if (mysql_errno()){
    die("fail to remove!");
}else{
    header("Location:index.php");
}