<?php
$n=10;

for ($i=1; $i <=$n ; $i++) {
    if($i%2 == 0){
        continue;
    }
    for ($k= $n; $k > $i ; $k--) 
        echo("&nbsp;&nbsp;");
    for ($j=1; $j <=$i ; $j++) { 
        echo "&nbsp$j ";
    }
    echo "<br>";
}
for($i = $n-2; $i>=1; $i--)
{
    if($i%2 == 0){
        continue;
    }
        for ($k= $n; $k > $i ; $k--) 
           echo("&nbsp;&nbsp;");

        for ($j=1; $j <=$i ; $j++) { 
            echo "&nbsp$j ";
    }
    echo "<br>";
}

