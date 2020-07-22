<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>phphphph</title>
	</head>
	<body>
		<img src="jpeg.jpg" style="width: 400px">
		<br>
		<div>Hello, s-senpai...	(´• ω •`)ﾉ <br>
		Please type something below, I will see it in my logs.</div>
		<br>

		<form method="POST" action="">
			<input name="text" type="text" placeholder="Text (<500 symbols please)">
			<input type="submit" value="Submit">
		</form>
		<br>

		<?php

		$password = "*your secure password here*";
		$db = "*name of your database*";
		$table = "*name of the table*";

		$link = mysqli_connect("127.0.0.1", "root", $password, $db);

		if (!$link) {
		    echo "Critical error 〣( ºΔº )〣";
		    //echo "Error code: " . mysql_connect_errno() . PHP_EOL;
		    //echo "Error text: " . mysql_connect_error() . PHP_EOL;
		    exit;
		}

		//echo "MySQL connection established!" . PHP_EOL;
		//echo "Server info: " . mysqli_get_host_info($link) . PHP_EOL . "<br><br>";

		if (isset($_POST['text'])){

			//variables from the form
			$text = $_POST['text'];

			$sql = "INSERT INTO {$table} (time_created, message) VALUES (NOW(), '$text')";
			if (mysqli_query($link, $sql)) {
			      echo "Thank you!";
			} else {
			      echo "Error 〣( ºΔº )〣 <br>";
			      //echo "Info: " . $sql . "<br>" . mysqli_error($link);
			}
		}

		mysqli_close($link);
		?>
	</body>
</html>
