 <?php
 
 
 //sort according to alphabet
$cars = array("Volvo", "BMW", "Toyota");
sort($cars);

 $carlength = count($cars);
for($i = 0; $i < $carlength; $i++) {
  echo $cars[$i];
  echo "<br>";
}

//sort number wise

$numbers = array(4, 6, 2, 22, 11);
sort($numbers);

$arrlength = count($numbers);
for($x = 0; $x < $arrlength; $x++) {
  echo $numbers[$x];
  echo "<br>";
}
?> 
