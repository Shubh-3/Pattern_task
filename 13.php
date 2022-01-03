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

			for ($i=1; $i <=$n ; $i++) {
                for ($k= $n; $k > $i ; $k--) 
                    echo "&nbsp;&nbsp;&nbsp;";
                for ($j=1; $j <=$i ; $j++) { 
                    echo " _*_ ";
                }
                echo "<br>";
            }
		}
?>
</body>
</html>
