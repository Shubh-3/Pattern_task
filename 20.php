<?php

$n = 5;

for ($i = 1; $i <= $n; $i++)
	{
	
		for($j = 1; $j <= 5-$i; $j++ )
		{
			echo "&nbsp&nbsp";
		}
		for($j = 1; $j <= $i; $j++ )
		{
			echo "$i &nbsp";
		}
		echo "<br>";
	}

?>
