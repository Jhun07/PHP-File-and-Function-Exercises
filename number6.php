<?php
$number = 2;
function identifier($number)
{
   if ($number == 1){
         return 0;
   }
   for ($i = 2; $i <= $number/2; $i++)
   {
      if ($number % $i == 0)
      return 0;
   }
   return 1;
}
$check = identifier($number);
if ($check == 1)
   echo "<i style='color:blue; font: bold impact; '>$number</i>"   .  " is a prime number .";
else
   echo $number."  is a non-prime number .";
?>
