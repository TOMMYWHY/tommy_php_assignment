<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title></title>
    <style>
        p{ color:red;}

    </style>
</head>
<body>


<?php


require_once "function.php";
connectDb();
$t=$_GET['tires'];
$o=$_GET['oil'];
$s=$_GET['spark_plugs'];
$a=$_GET['address'];
$item=$t+$o+$s;
$total= 1*$t+2*$o+5*$s;
$subtotal=0.1*$total+$total;
if (empty($t)){
    $t=0;
}
if (empty($o)){
    $o=0;
}
if (empty($s)){
    $s=0;
}

$insertData = "INSERT INTO orderform (tires, oil,spark_plugs,address,subtotal) VALUES('$t','$o','$s','$a','$subtotal') ";
$aa=mysql_query($insertData);
if (!$aa){
    echo 'mysql_error:'.mysql_error();
}
?>

<br><h2>Order Results</h2><br/>

<?PHP
if ($t==''&&$o==''&&$s=='') {
    echo "<p>You did not order anything on the previous page!</p><br/>";
}
else{
    if (isset($_REQUEST['submit'])) {

        echo "Order processed at &nbsp;".date("H:i A dS \ F Y");
        echo "<br/><br/>Your order is as follows:<br/><br/>";
        if ($t!=0&&$t!='') {
            echo $t." tires<br/>";
        }
        if ($o!=0) {
            echo $o." bottel of oil<br/>";
        }
        if ($s!=0) {
            echo $s." spark plugs<br/>";
        }
        echo "Items ordered:".$item;
        echo "<br/>Subtotal: $"."&nbsp;".number_format($total,2)."<br/>";
        echo "Total including tax: $". number_format($subtotal,2);
        echo "<br/><br/>Address to ship to is"."&nbsp;".$a."<br/><br/>";
        echo "Order written.";
    }
}
?>


</body>
</html>

