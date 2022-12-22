<?php
//echo date("d-m-y h:i");
//echo date("d-M-Y");02-sep-2022
//echo date("d");//02
//echo date("D");//fri
//echo date("m").PHP_EOL;//09
//$i = readline("Enter today date");
//echo "Today date is $i";
//echo "Today is " . date("Y/m/d") .PHP_EOL;//2022/09/02
//echo "Today is " . date("Y.m.d") .PHP_EOL;//2022.09.02
//echo "Today is " . date("Y-m-d") .PHP_EOL;//2022-09-02
//echo "Today is " . date("l") .PHP_EOL;//friday
//echo "The time is " . date("h:i:sa");//12:29:10am
//echo date("d-m-y h:i:s:a");//02-09-22 12:30:21:pm
//echo date("d-m-y h:i:a");//02-09-22 12:34:pm
date_default_timezone_set("America/New_York");
//echo "The time is " . date("h:i:sa");//The time is 06:37:18:am
//mktime(hour, minute, second, month, day, year)
$d= mktime(11, 14, 54, 8, 12, 2014);
//echo "Created date is " . date("Y-m-d h:i:sa", $d);
$d=strtotime("10:30pm September 02 2022");
//echo "Created date is " . date("Y-m-d h:i:sa", $d);//Created date is 2022-09-02 10:30:00pm
$d=strtotime("tomorrow");
//echo date("Y-m-d h:i:sa", $d) .PHP_EOL;//2022-09-03 12:00:00am

$d=strtotime("next Saturday");
//echo date("Y-m-d h:i:sa", $d) .PHP_EOL;//2022-09-03 12:00:00am

$d=strtotime("+3 Months");
//echo date("Y-m-d h:i:sa", $d) .PHP_EOL;//2022-12-02 06:56:22am
$d=strtotime("-3 Months");
//echo date("Y-m-d h:i:sa", $d) .PHP_EOL;//2022-06-02 06:58:06am
//iteration from loop
$startdate=strtotime("Friday");
$enddate=strtotime("+2 weeks", $startdate);

while ($startdate < $enddate) {
  //echo date("M d Y", $startdate) .PHP_EOL;// sep 02 2022, sep 09 2022
  $startdate = strtotime("+1 week", $startdate);
}
// how many days are left till the given date
$d1=strtotime("September 30");
$d2=ceil(($d1-time())/60/60/24);
echo "There are " . $d2 ." days until 30th of September.";//There are 28 days until 30th of September.
?>