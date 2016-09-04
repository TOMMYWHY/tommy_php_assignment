<?php
/**
 * Created by PhpStorm.
 * User: Tommy
 * Date: 16/7/11
 * Time: 下午9:50
 */
echo "<h2>Your Favourite Seasons and Weather are:-</h2>";

error_reporting(0);

if(isset($_GET['submit'])){

    $w=$_GET['weather'];
    if (isset($w)){
        echo "<h3>Your favourite weather in ".$_GET['city']." is:<br/></h3>";

        echo "<ul>";
        for($i=0;$i<count($w);$i++){
            echo "<li>".ucwords($w[$i])."</li>";
        }
        echo "</ul>"."<br/>";
    }else{
        echo "havent choise weather!<br>";
    }

    $s=$_GET['seasion'];
    if (isset($s)) {
        echo "<h2>Your favourite seasons are:</h2>";

        echo "<ul>";
        for($i=0;$i<count($s);$i++){
            print"<li>".ucwords($s[$i])."</li>";
        }
        echo "</ul>";
    }else{
        echo "havent choise seasons!<br>";
    }
}