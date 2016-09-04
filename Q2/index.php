<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8"/>
		<title></title>
		<?php
        $w=array("sunshine","clouds","rain","hail","sleet","snow","wind","cold","heat");
        function weather($w){
            for ($i=0;$i<count($w);$i++){
				echo "<input type='checkbox' name=weather[] value='$w[$i]' />".ucwords($w[$i])."<br/>";
			}
        }
        $s=array("spring","summer","autumn","winter");
        function season($s){
            for($i=0;$i<(count($s));$i++){
                echo"<input type=checkbox name=seasion[] value='$s[$i]' />".ucwords($s[$i])."<br/>";
            }
        }

        ?>
	</head>
	<body>
		<form action="show.php" method="get">
			<h2>
				Your Favourite Seasons and Weather are:-
			</h2>
			<h3>
				Please enter the city of your choice:
			</h3>
				City:
				<input type="text" name="city" required>
				<br/>
				<h3>
					Please choose the kinds of seasons and weather you like from the list below.
				</h3>
				<h3>
					Choose all that apply.
				</h3>
				<h3>
					<b>Weather</b>
                </h3>
                    <br/>
<?php
weather($w);
?>
            <h3>
                <b>Weather</b>
            </h3>

            <?php
            season($s);
            ?>
            <br>
				<input type="submit" name="submit" value="go">
			</form>
	</body>
</html>