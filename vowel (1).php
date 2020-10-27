<?php
  
$x ="d";

$y=($x=='a'|| $x=='e'||$x=='i'||$x=='o'||$x=='u'||$x=='A'|| $x=='E'|| $x=='I'|| $x=='O'|| $x=='U' );
if($y){
    echo "<h2 style='color:green';>$x is vowel</h2>";
      }
else {
    echo "<h2 style='color:green';>$x is  consonant</h2>";
    }
?>