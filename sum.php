<?php
$x=1;
$sum=0;
do{
    if($x%3==0)
    {
        echo $x . "<br>";
        $sum=$sum+$x;
        
    }
    $x++;
    
}
while($x<=100);
echo "Sum Is:".$sum ."<br>" ;
?>