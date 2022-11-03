<?php
$x=1;
$sum=0;
$sum1=0;
$d;
while($x<=100)
{
    if($x%7==0)
    {
    
        if($x%2==0)
        {
            echo "even No:" .$x . "<br>";
            $sum=$sum+$x;

        }
   
   else
   {
      echo "Odd No:" . $x ."<br>";
      $sum1=$sum+$x;
      
   }
  
 }

   $x++; 

}
$d=$sum1-$sum;

echo "dif:" .$d ."<br>";


?>