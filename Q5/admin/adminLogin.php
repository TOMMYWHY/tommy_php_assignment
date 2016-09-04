<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Document</title>
  
</head>
<body>

</body>
</html>

<?php
/**
 * Created by PhpStorm.
 * User: Tommy
 * Date: 16/7/18
 * Time: 下午3:07
 */
//require_once "functions.php";
require_once "functions.php";
connectDb();
extract($_POST);
if (empty($admin_name)){
    echo "<h2><a href='../index.html' >back to index</a></h2> <br><br>";
    die("name is empty");

}
if (empty($admin_pw)){
    echo "<h2><a href='../index.html' >back to index</a></h2> <br><br>";
    die("password is empty");
}


$query_data =mysql_query("SELECT * FROM admin_tb WHERE admin_name='$admin_name'AND admin_pw = '$admin_pw' ");
$query_num = mysql_num_rows($query_data);
if (isset($_POST['admin_login'])){
    if ($query_num<1){
        echo "<h2><a href='../index.html' >back to index</a></h2> <br><br>";
        echo "cant find ID!<br><br><br>";
//        echo "<a href='../index.html' >back to index</a>";
    }else{
        header("location:admin.php");
    }
}

