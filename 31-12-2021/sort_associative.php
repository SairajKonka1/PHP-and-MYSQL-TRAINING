<?php
$age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");
ksort($age);

foreach($age as $x => $x_value) {
  echo "Key=" . $x . ", Value=" . $x_value;
  echo "<br>";
}
echo "<br>";
$age2 = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");
krsort($age2);

foreach($age2 as $x => $x_value) {
  echo "Key=" . $x . ", Value=" . $x_value;
  echo "<br>";
}
echo "<br>";
$age4 = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");
arsort($age4);

foreach($age4 as $x => $x_value) {
  echo "Key=" . $x . ", Value=" . $x_value;
  echo "<br>";
}
?>
