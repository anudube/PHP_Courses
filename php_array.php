<?php

$array= array( 1 ,2, "Anu",20);
print_r($array);


//1.Indexed Array.Index can be assigned automatically

 $name=  array("Tom","Jerry","doremon");
var_dump($name);

//1.Indexed Array.Index can be assigned manually

$name[0]= "Tom";
$name[1]= "Jerry";
$name[2]= "Doremon";
print_r($name);

//2.Associative Array
// two way to create:
//1. 
$cars= array("BMW","Thar","Mercedes");
print_r($cars);

//2.
$cars[0]= "BMW";
$cars[1]= "Thar";
$cars[2]= "Mercedes";
Print_r($cars);

//3.Multidimensional Array
//1 way

$multi_array=[
               "name"=> "Anu",
               "company"=> "Accenture",
];
print_r($multi_array);
print_r($multi_array["name"]);

//2 way 

$multi_array=[
               "name"=> "Anu",
               "company"=> "Accenture",
              "Info"=>["lap_no" =>1234,
                       "support_no" =>3456

]


];
print_r($multi_array["Info"]["lap_no"]);

//3 way
$cars = array (
  array("Volvo",22,18),
  array("BMW",15,13),
  array("Saab",5,2),
  array("Land Rover",17,15)
);
echo $cars[0][0].": In stock: ".$cars[0][1].", sold: ".$cars[0][2];
echo $cars[1][0].": In stock: ".$cars[1][1].", sold: ".$cars[1][2];
echo $cars[2][0].": In stock: ".$cars[2][1].", sold: ".$cars[2][2];
echo $cars[3][0].": In stock: ".$cars[3][1].", sold: ".$cars[3][2];

?>