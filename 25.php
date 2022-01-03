<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form method="post">
		<input type="number" name="number1">
		<input type="number" name="number2">
		<input type="submit" name="submit" value="submit">
	</form>
	<?php 
	

		if ($_POST) {
			$n1 = $_POST['number1'];
			$n2 = $_POST['number2'];

			for ($i=$n1; $i <=$n2 ; $i++)
			{
                for ($j=1; $j < $i-1; $j++)
                { 
                    if($i%2==0)
                    {
                    	echo "$i";
                    }
                }
            echo "<br>";
            }
		}
		
		
	?>
</body>
</html>
