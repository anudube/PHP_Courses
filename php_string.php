<?php
$string = "Hello! Welcome";
//echo "$string";
//echo "\n".strlen($string);//14
//echo str_replace("Welcome", "Tom", $string);//Hello! Tom
//echo strtolower($string);//hello! welcome
//echo strtoupper($string);//Hello! Welcome
//echo str_word_count($string);//2
//echo strrev($string);//emocleW !olleH
//echo strpos($string,"Welcome");//7
$a = "hello World. Its's a beautiful day.";
//print_r(explode(" ",$a));
/* output:Array
(
    [0] => Hello
    [1] => World.
    [2] => Its's
    [3] => a
    [4] => beautiful
    [5] => day.
)
*/
//echo lcfirst($string);//hello! Welcome
//echo ucfirst($a);//Hello World. Its's a beautiful day.
$left_trim = "  Hello Beautiful World!!";
//echo ltrim($left_trim);//Hello Beautiful World!!
$right_trim = "  Hello Beautiful World!!   ";
//echo rtrim($right_trim);// Hello Beautiful World!!
echo str_repeat("This is my first time working in php".PHP_EOL,"3");
/* output:
This is my first time working in php
This is my first time working in php
This is my first time working in php
*/
//print_r(str_split("Tom & Jerry"));
//var_dump(str_split("Hello"));
/* output:
Array
(
    [0] => T
    [1] => o
    [2] => m
    [3] =>
    [4] => &
    [5] =>
    [6] => J
    [7] => e
    [8] => r
    [9] => r
    [10] => y
)
*/

?>











