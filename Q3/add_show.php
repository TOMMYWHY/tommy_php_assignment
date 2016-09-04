<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Add</title>

</head>
<body>
<?php
include "menu.php";
?>
<center style="margin-top: 50px;">
<form action="add.php" method="post">
    Name:<input type="text" name="name"/>
    Address:<input type="text" name="address"/>
    Phone:<input type="text" name="phone"/>
    Email:<input type="text" name="email"/>
    <input type="submit" name="submit" value="Submit" />

</form>
</center>
</body>
</html>