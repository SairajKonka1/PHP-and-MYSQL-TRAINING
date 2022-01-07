<?php  
$num=407;  
$total=0;  
$x=$num;  
while($x!=0)  
{  
$rem=$x%10;  
$total=$total+$rem*$rem*$rem;  
$x=$x/10;  
}  
if($num==$total)  
{  
echo "Yes 407 is an Armstrong number";  
}  
else  
{  
echo "No 407 is not an armstrong number";  
}  
?>  
