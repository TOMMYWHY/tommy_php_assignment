<!DOCTYPE html>

<html>
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
<?php
include "menu.php";
?>

<?php
/**
 * Created by PhpStorm.
 * User: Tommy
 * Date: 16/7/12
 * Time: 下午3:35
 */
//if (isset($_GET["id"])&&!empty($_GET["id"])){}
require_once "functions.php";


//此处为什么用get????
if (empty($_GET["id"])){
    die("id is not define!");
}else{
    $conn=connectDb();
    $id = intval($_GET["id"]);
    $result =mysql_query("SELECT * FROM product_tb WHERE id=$id");
    if (mysql_error()){
        die("cant connect db:".mysql_error());
    }

    $arr=mysql_fetch_assoc($result);
//    print_r($arr);

}

?>
<center>
    <div style="height: 30px;"></div>
<form  action="edit_server.php" method="post">
    Id:<input type="text" name="id" readonly  value="<?php echo $arr['id']; ?>" />

    Product name:<input type="text" name="product_name" value="<?php echo $arr['product_name']; ?>" />
    Product price:<input type="text" name="product_price" value="<?php echo $arr['product_price']; ?>" />
    
    
    Brand
    <select name="brand_id_select">
        <?php
        require_once "functions.php";
        connectDb();
        $result = queryTb_Brand();
        $result_length = arrNum($result);

        for($i=0;$i<$result_length;$i++){
            $result_arr =fetchArr($result);
            $brand_id= $result_arr["brand_id"];
            $brand_name = $result_arr["brand_name"];

            echo"<option value='$brand_id'>".$brand_name."</option>" ;
        }
        ?>
    </select>



    
    
    Description:<input type="text" name="description" value="<?php echo $arr['description']; ?>" />
    <input type="submit" name="submit" value="Edit Submit" />
</form>
</center>
</body>
</html>