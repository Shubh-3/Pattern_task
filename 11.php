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

			for ($i=1; $i <= $n ; $i++) { 
                for ($j=1; $j <= $n; $j++) { 
                    if($j <= ($n-$i))
                        echo " _ ";
                    else
                        echo " * ";
                }
                echo "<br>";
            }
            for ($i=2; $i <= $n; $i++) { 
                for ($j=1; $j <= $n; $j++) { 
                    if($j < $i)
                        echo " _ ";
                    else
                        echo " * ";
                    }
                echo "<br>";
            }
		}
?>
</body>
</html>
