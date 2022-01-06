<?php

$str= "hello world";
$str2 = explode(" ", $str);

$str2 = array_reverse($str2);

echo $newstring = implode(" ", $str2);

?>
