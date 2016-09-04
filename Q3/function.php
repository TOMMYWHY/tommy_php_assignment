<?php

require_once "config.php";
function connectDb(){
    return  mysql_connect(HOST,USER,PW);
}