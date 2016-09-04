<?php
include_once "menu.php";
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>user</title>
    <style type="text/css">
    	section{width: 800px;margin: 0 auto;}
    	table{margin: 60px auto;}
        input{margin-left: 20px;}

    </style>
</head>
<body>
	<section>


     <h3>  Brand</h3>
        <form action="detail.php" method="get">
        <select name="brand_id_select">
            <?php
            require_once "functions.php";
            connectDb();
$result=mysql_query("SELECT * FROM  brand_tb ");

            $result_length = arrNum($result);

            for($i=0;$i<$result_length;$i++){
                $result_arr =fetchArr($result);
                $brand_name = $result_arr["brand_name"];
                $brand_id= $result_arr["brand_id"];

                echo"<option value='$brand_id'>".$brand_name."</option>" ;

            }
            ?>
            <input type="submit" name="submit" value="Submit" >
        </form>
        </select>




    </section>

</body>
</html>

<?php
/**
 * Created by PhpStorm.
 * User: Tommy
 * Date: 16/7/19
 * Time: 下午5:16
 */

