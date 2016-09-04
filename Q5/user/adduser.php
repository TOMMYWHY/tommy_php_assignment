<?php
/**
 * Created by PhpStorm.
 * User: Tommy
 * Date: 16/7/19
 * Time: 下午5:18
 */

require_once "functions.php";
$conn= connectDb();
extract($_POST);
$insert="INSERT INTO user_tb (user_name,user_pw) VALUES ('$user_name','$user_pw')";
$add_user= mysql_query($insert);
if (!$add_user){
    die(mysql_error());
}else{

echo "
<h2> Congratulation!<br>
Sgin up successful!<br>
2s go back to index.html!
</h2>
";
    header("Refresh:2;url=../index.html");
}