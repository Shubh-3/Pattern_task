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

			if($n1%2==0){
      			echo $n;
      			for($i=$n1-2;$i<=$n2;$i=$i+2)
      			{
					for($j=$n1-2;$j<$i;$j=$j+2)
					{
          				echo $i;
        			}
        		echo "<br>";
      			}
    		}
    		else
    		{
      			$d = $n1 + 1;
      			for($i=$d-2;$i<=$n2;$i=$i+2)
      			{
        			for($j=$d-2;$j<$i;$j=$j+2)
        			{
         				echo $i;
        			}
        		echo "<br>";
      			}
    		}
		}
	?>
</body>
</html>
