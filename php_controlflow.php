<?php
//if 
$i= 2;
if ($i>1) {
	echo "I is greater";
}
// if else
$i=1;
$j=2;
if ($i<$j) {
echo "I is lower";

}else{
	echo "J is greater";
}
//for loop
for ($i=0; $i <=10; $i++) { 
	echo $i.PHP_EOL;
}
// while loop
$k=1;
while ($k <=5) {
	echo $k.PHP_EOL;
	$k++;
}
// do while loop
$i= 10;
do{
	echo $i.PHP_EOL;
	$i--;
}while($i >=7);
// foreach loop
 $array = array("name"=>"Jerry","age"=>"10","school"=>"Tom&Jerry");
 foreach ($array as $key => $value) {
 	echo $key. "-".$value;
 }
 // foreach multidimentional array
 $array = array("name"=>"Jerry","age"=>"10","school"=>"Tom&Jerry", "bio"=> array("info"=>" some info"));
 foreach ($array as $key => $value) {
 	echo $key. "-".print_r($value);
 }
 // switch
 $m= 1;
 switch ($m) {
 	case 1:
 		  echo "it is 1";
 		break;
 	case 2:
 	echo "it is 2";
 	break;
 	default:
 	echo "Wrong value provided";
 	break;
 }

?>


















