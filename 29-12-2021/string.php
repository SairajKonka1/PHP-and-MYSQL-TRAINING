<?php

$str = "This is my first program";

//find Length
echo strlen($str)."<br>";

//string word count
echo str_word_count($str)."<br>";

//reverse
echo strrev($str)."<br>";

//give position of first match
echo strpos($str, "my")."<br>";

//replace
echo str_replace("my", "our", $str);


?>
