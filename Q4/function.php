<?php
/**
 * Created by PhpStorm.
 * User: Tommy
 * Date: 16/7/12
 * Time: 下午7:01
 */
require_once "config.php";
function connectDb(){
    $conn = mysql_connect(HOST,USER,PW);
    if (!$conn){
        die("cant connect db");
    }
    mysql_select_db("q4_db",$conn);
    return $conn;
}

//
//function connectDb(){
//    return  mysql_connect(HOST,USER,PW);
//}