<?php
$h=10;
$w=20;
$A=$h*$w;
{
    echo "Area:" .$A ."<br>";
}
    if($A%2==0)
    {
        echo "Even No:" . $A ."<br>";
        if($A/=2)
        {
         echo " Half Area=".$A . "<br>";
        }
    }

else{
    echo "odd No" .$A;
}
?>