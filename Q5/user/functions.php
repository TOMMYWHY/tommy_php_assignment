<?php
/**
 * Created by PhpStorm.
 * User: Tommy
 * Date: 16/7/12
 * Time: 下午7:01
 */
require_once "config.php";

/**
 * @return connect with database and return suceess or not!
 */
function connectDb(){
    $conn = mysql_connect(HOST,USER,PW);
    if (!$conn){
        die("cant connect db");
    }
    mysql_select_db("q5_db",$conn);
    return $conn;
}




/**
 * @return query table:brand_tb and return $result
 */
function queryTb_Brand (){
    $result = mysql_query("SELECT * FROM brand_tb");
//    $result_length= mysql_num_rows($result);
    return $result;
}

/**
 * @return query Product:product_tb and return $result
 */
function queryTb_Product (){
    $result = mysql_query("SELECT * FROM product_tb");
//    $result_length= mysql_num_rows($result);
    return $result;
}

/**
 * @param $queryTb result of mysql_query
 * @return int number of array
 */

function arrNum($queryTb ){
    $result_length= mysql_num_rows($queryTb);
    return $result_length;
}

/**
 * @param $queryTb result of mysql_query
 * @return array format queryTb
 */
function fetchArr($queryTb){
$result_arr= mysql_fetch_array($queryTb);
    return $result_arr;
}
