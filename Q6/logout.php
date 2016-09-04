<html>
	<head>
		<title></title>
		<style type="text/css">
		a{text-decoration: none;}
			div{width: 100px;height: 50px;background: #EEEEEE;line-height: 50px;text-align: center;margin: 50px;}
		</style>
	</head>
	<body>
		<center style='margin-top: 50px;'>
			<h1>See you next time!</h1>
			
		<?php
session_start();
session_destroy();

echo "<a href='index.php'><div>Back</div></a>";
?>
</center>
	</body>
</html>



