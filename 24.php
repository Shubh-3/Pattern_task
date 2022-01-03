<?php
$num = 5;

for($i=1;$i<=$num;$i++)
{
	for($j=1;$j<=$i;$j++)
	{
		echo "$j";
	}
			
	for($k=1;$k<=2*($num-$i);$k++)
	{

		echo "&nbsp&nbsp";
	}
	for($k=$i;$k>=1;$k--)
	{
		echo "$k";
	}
	echo "<br>";
}


?>

