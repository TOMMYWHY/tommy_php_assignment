<?php

$myFile="q1.txt";
$from1=fopen($myFile,"w") or die("cant create it!");

$ln= $_GET['last_name'];
$fn= $_GET["first_name"];
$ad= $_GET["address"];
$ct= $_GET["city"];
$st= $_GET["state"];
$zp= $_GET["zip"];
$cty= $_GET["country"];
$ph1= $_GET["phone1"];
$ph2= $_GET["phone2"];
$ph3= $_GET["phone3"];
$em= $_GET["email"];
$mn= $_GET["month"];
$d= $_GET["day"];
$y= $_GET["year"];
$gd= $_GET["gender"];
$ss= $_GET["session"];
$co= $_GET["comments"];
fwrite($from1,"last_name:".$ln."\n");
fwrite($from1,"first_name:".$fn."\n");
fwrite($from1,"address:".$ad."\n");
fwrite($from1,"city:".$ct."\n");
fwrite($from1,"state:".$st."\n");
fwrite($from1,"zip:".$zp."\n");
fwrite($from1,"country:".$cty."\n");
fwrite($from1,"phone:".$ph1."-".$ph2."-".$ph3."\n");
fwrite($from1,"email:".$em."\n");
fwrite($from1,"Birth Date:".$mn."-".$d."-".$y."\n");
//fwrite($from1,"day:".$d."\n");
//fwrite($from1,"year:".$y."\n");
fwrite($from1,"gender:".$gd."\n");
fwrite($from1,"session:".$ss."\n");
fwrite($from1,"comments:".$co."\n");
fclose($from1);

$read=fopen('q1.txt' ,"r");
while(!feof($read)){
    echo fgets($read)."<br/>";
}
fclose($read);
