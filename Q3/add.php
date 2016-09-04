<?php
/**
 * Created by PhpStorm.
 * User: Tommy
 * Date: 16/7/12
 * Time: 下午12:05
 */

if (!isset($_POST["name"])){
    die("must have a rname");
}

if (!isset( $_POST["address"])){
    die("must have a address");
}

$name = $_POST["name"];
if (empty($name)){
    die("name is empty");
}
$address = $_POST["address"];
if (empty($address)){
    die("address is empty");
}
$phone = $_POST["phone"];
if (empty($phone)){
    die("phone is empty");
}
$email = $_POST["email"];
if (empty($email)){
    die("email is empty");
}

require_once "function.php";
$conn =connectDb();

if ($conn){
    mysql_select_db("q3_db",$conn);
}else{
    echo "connect fail";
}

mysql_query("INSERT INTO address_book(name,address,phone,email) VALUES ('$name','$address','$phone','$email')");

if (mysql_errno()){
    echo mysql_errno();
}else{
    header("LOCATION:index.php");
}






