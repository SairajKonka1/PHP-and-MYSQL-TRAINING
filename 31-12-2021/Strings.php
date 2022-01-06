<?php

$string = "Sairaj konka";

echo "string = Sairaj Konka <br>";

echo "Length can be know by strlen() method length of string is ".strlen($string)."<br>";

echo "Words count can be known by the method str_word_count() words in string are ".str_word_count($string)."<br>";

echo "String can be reversed by the method strrev() reverse of the string is ".strrev($string)."<br>";

echo "Check substring in a string by the method strpos() substring 'raj' is at index ".strpos($string,"raj")."<br>";

echo "To replace a substring in a string str_replace() replacing 'raj' with 'kumar' ".str_replace('raj','kumar',$string)."<br>";




?>
