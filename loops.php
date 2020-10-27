<?php
$x=150;
$i;

for($i=1;$i<=150;$i++)
{
    if($i%3==0 && $i%5==0)
    {
        echo "<h2 style='color:blue';> $i. Hello World </h2>";
    }
    else if($i%3==0)
    {
        echo "<h2 style='color:green';> $i. Hello World </h2>";
    }
    else if($i%5==0)
    {
        echo "<h2 style='color:red';> $i. Hello World </h2>";
    }  
    else
    {
        echo "<h2 style='color:yellow';> $i. Hello World </h2>";
    }

}


?>