<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form method="post">
		<input type="number" name="number">
		<input type="submit" name="submit" value="submit">
	</form>
	
	<?php 
		if ($_POST) {
		$n = $_POST['number'];
		$m = $n;

			for ($i = 1; $i <= $n; $i++)
			{

				for($j = 1; $j <= $i; $j++ )
				{
					echo "&nbsp&nbsp&nbsp&nbsp";
				}
				for($k = 1; $k <= $m; $k++ )
				{
					echo "&nbsp&nbsp&nbsp_*_";
				}
				$m--;
				echo "<br>";
			}
		}
	?>
</body>
</html>

