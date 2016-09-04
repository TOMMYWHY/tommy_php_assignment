<?php
/**
 * Created by PhpStorm.
 * User: Tommy
 * Date: 16/7/12
 * Time: 下午5:25
 */
require_once "function.php";
if (empty($_POST["id"])){
    die("id is empty");
}
if (empty($_POST["name"])){
    die("name is empty");
}
//判断意义? 判断可以写成function?
$id = intval($_POST["id"]);
//$name = $_POST["name"];
//$address = $_POST["address"];
//$phone = $_POST["phone"];
//$email = $_POST["email"];
extract($_POST);

$conn = connectDb();
mysql_select_db("q3_db",$conn );
mysql_query("UPDATE address_book SET name='$name',address='$address',phone='$phone',email='$email' WHERE id=$id ");

if (mysql_errno()){
    echo mysql_errno();
}else{
    header("Location:index.php");
}









