<!DOCTYPE html>

<html>
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>


<?php
/**
 * Created by PhpStorm.
 * User: Tommy
 * Date: 16/7/12
 * Time: 下午3:35
 */
//if (isset($_GET["id"])&&!empty($_GET["id"])){}
require_once "function.php";


//此处get 对应 href='edit.php?id=$id'的get方式传参
if (empty($_GET["id"])){
    die("id is not define!");
}else{
    $conn=connectDb();
    mysql_select_db("q3_db",$conn);
    $id = intval($_GET["id"]);
    $result =mysql_query("SELECT * FROM address_book WHERE id=$id");

    if (mysql_errno()){
        die("cant connect db");
    }

    $arr=mysql_fetch_assoc($result);
//    print_r($arr);

}

?>
<center style="margin-top: 50px;">
<form action="edit_server.php" method="post">
    Id:<input type="text" name="id" readonly  value="<?php echo $arr['id']; ?>" />

    Name:<input type="text" name="name" value="<?php echo $arr['name']; ?>" />
    Address:<input type="text" name="address" value="<?php echo $arr['address']; ?>" />
    Phone:<input type="text" name="phone" value="<?php echo $arr['phone']; ?>" />
    Email:<input type="text" name="email" value="<?php echo $arr['email']; ?>" />
    <input type="submit" name="submit" value="Edit Submit" />
</form>
</center>
</body>
</html>