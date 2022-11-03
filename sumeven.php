<?php
$x=1;
$sum=0;
do{
    if($x%3==0)
    {
        if($x%2==0)
        {
            echo "even no:" .$x . "<br>";
        }
    
        $sum=$sum+$x;
        
    }
    $x++;
    
}
while($x<=100);
echo "Sum Is:".$sum ."<br>" ;
?>