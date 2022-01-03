<?php

$n = 5;
$a = 0;
$alpha = range('A', 'Z'); 

for ($i = 1; $i <= $n; $i++)
	{

		for($j = 1; $j <= $i; $j++ )
		{

			echo "$alpha[$a]";
			$a++;
		}
		
		echo "<br>";
	}

?>
