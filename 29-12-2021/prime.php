<?php

function Prime_check($num){
if($num == 1){
  return 0;
  }
 
 for($i = 2; $i <=$num/2; $i++){
 if($num % $i == 0)
   return 0;
  }
  return 1;
 }
  
 $number = 2;
 $result = prime_check($number);

if($result == 1){

   echo "Prime Number";
   } else{
   echo "Not a Prime number";
 }
?>

