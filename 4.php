<?php

$n = 5;
$m = $n;

for ($i = 1; $i <= $n; $i++)
	{

		for($j = 1; $j <= $i; $j++ )
		{
			echo "&nbsp&nbsp";
		}
		for($k = 1; $k <= $m; $k++ )
		{
			echo "*";
		}
		$m--;
		echo "<br>";
	}

?>
