<?php

$array= array( 1 ,2, "Anu",20);
//print_r($array);


//1.Indexed Array.Index can be assigned automatically

 $name=  array("Tom","Jerry","doremon");
//var_dump($name);

//1.Indexed Array.Index can be assigned manually

$name[0]= "Tom";
$name[1]= "Jerry";
$name[2]= "Doremon";
//print_r($name);

//2.Associative Array
// two way to create:
//1. 
$cars= array("BMW","Thar","Mercedes");
//print_r($cars);

//2.
$cars[0]= "BMW";
$cars[1]= "Thar";
$cars[2]= "Mercedes";
//Print_r($cars);


//3.Multidimensional Array
//1 way

$multi_array=[
               "name"=> "Anu",
               "company"=> "Accenture",
];
//print_r($multi_array);
//print_r($multi_array["name"]);

//2 way 

$multi_array=[
               "name"=> "Anu",
               "company"=> "Accenture",
              "Info"=>["lap_no" =>1234,
                       "support_no" =>3456

]


];
//print_r($multi_array["Info"]["lap_no"]);
//print_r($multi_array);

//3 way
$cars = array (
  array("Volvo",22,18),
  array("BMW",15,13),
  array("Saab",5,2),
  array("Land Rover",17,15)
);
// echo $cars[0][0].": In stock: ".$cars[0][1].", sold: ".$cars[0][2];
// echo $cars[1][0].": In stock: ".$cars[1][1].", sold: ".$cars[1][2];
// echo $cars[2][0].": In stock: ".$cars[2][1].", sold: ".$cars[2][2];
// echo $cars[3][0].": In stock: ".$cars[3][1].", sold: ".$cars[3][2];

////////////////1...array()////////////////////////////
$cars=array("Volvo","BMW","Toyota");
//echo "I like " . $cars[0] . ", " . $cars[1] . " and " . $cars[2] . ".";

//////////////2...array_change_key_case()[Change all keys in an array to uppercase]/////////////
$age=array("Peter"=>"35","Ben"=>"37","Joe"=>"43");
//print_r(array_change_key_case($age,CASE_UPPER));

//////////////3...array_chunk()[Split an array into chunks of two]///////////////////////
$cars=array("Volvo","BMW","Toyota","Honda","Mercedes","Opel");
//print_r(array_chunk($cars,2));

//////////////4..array_column()[get last name of the recordset]////////////////////
$a = array(
  array(
    'id' => 5698,
    'first_name' => 'Peter',
    'last_name' => 'Griffin',
  ),
  array(
    'id' => 4767,
    'first_name' => 'Ben',
    'last_name' => 'Smith',
  ),
  array(
    'id' => 3809,
    'first_name' => 'Joe',
    'last_name' => 'Doe',
  )
);

$last_names = array_column($a, 'last_name');
//print_r($last_names);

/////////////5...array_combine()[Create an array by using the elements from one "keys" array and one "values" array]////////////
$fname=array("Peter","Ben","Joe");
$age=array("35","37","43");

$c=array_combine($fname,$age);
//print_r($c);

//////////6...array_count_values()[Count all the values of an array]//////////////////////////
$a=array("A","Cat","Dog","A","Dog");
//print_r(array_count_values($a));

//////////7...array_diff()[Compare the values of two arrays, and return the differences]/////////
$a1=array("a"=>"red","b"=>"green","c"=>"blue","d"=>"yellow");
$a2=array("e"=>"red","f"=>"green","g"=>"blue");

$result=array_diff($a1,$a2);
//print_r($result);

///////////8...array_diff_assoc()[Compare the keys and values of two arrays, and return the differences]///
$a1=array("a"=>"red","b"=>"green","c"=>"blue","d"=>"yellow","e"=>"black");
$a2=array("a"=>"red","b"=>"green","c"=>"blue");

$result=array_diff_assoc($a1,$a2);
//print_r($result);

/////////9...array_diff_key()[Compare the keys of two arrays, and return the differences]//////////
$a1=array("a"=>"red","b"=>"green","c"=>"blue");
$a2=array("a"=>"red","b"=>"blue","d"=>"pink");

$result=array_diff_key($a1,$a2);
//print_r($result);

//////////10....array_diff_uassoc()[Compare the keys and values of two arrays (use a user-defined function to compare the keys), and return the differences]
function myfunction($a,$b)
{
if ($a===$b)
  {
  return 0;
  }
  return ($a>$b)?1:-1;
}

$a1=array("a"=>"red","b"=>"green","c"=>"blue");
$a2=array("d"=>"red","b"=>"green","e"=>"blue");

$result=array_diff_uassoc($a1,$a2,"myfunction");
//print_r($result);

////////11...array_diff_ukey()[Compare the keys of two arrays (using a user-defined key comparison function), and return the differences]/
function myfunction1($a,$b)
{
if ($a===$b)
  {
  return 0;
  }
  return ($a>$b)?1:-1;
}

$a1=array("a"=>"red","b"=>"green","c"=>"blue");
$a2=array("a"=>"blue","b"=>"black","e"=>"blue");

$result=array_diff_ukey($a1,$a2,"myfunction1");
//print_r($result);

///////12....array_fill()[Fill an array with values]///////
$a1=array_fill(3,4,"blue");
$b1=array_fill(0,1,"red");
//print_r($a1);
echo "<br>";
//print_r($b1);

////////13...array_fill_keys()[Fill an array with values, specifying keys]///////////
$keys=array("a","b","c","d");
$a1=array_fill_keys($keys,"black");
//print_r($a1);

//////14.array_flip()[Flip all keys with their associated values in an array]//////
$a1=array("a"=>"red","b"=>"green","c"=>"blue","d"=>"yellow");
$result=array_flip($a1);
//print_r($result);

////////15.array_intersect()[Compare the values of two arrays, and return the matches]///////
$a1=array("a"=>"red","b"=>"green","c"=>"blue","d"=>"yellow");
$a2=array("e"=>"red","f"=>"green","g"=>"blue");

$result=array_intersect($a1,$a2);
//print_r($result);

/////16.array_intersect_assoc()[Compare the keys and values of two arrays, and return the matches]////
$a1=array("a"=>"red","b"=>"green","c"=>"blue","d"=>"yellow");
$a2=array("a"=>"red","b"=>"green","c"=>"blue");

$result=array_intersect_assoc($a1,$a2);
//print_r($result);

/////////17...array_intersect_key()[Compare the keys of two arrays, and return the matches]////
$a1=array("a"=>"red","b"=>"green","c"=>"blue");
$a2=array("a"=>"red","c"=>"blue","d"=>"pink");

$result=array_intersect_key($a1,$a2);
//print_r($result);

///////18...array_key_exists()[Check if the key "Volvo" exists in an array]//////
$a=array("Volvo"=>"XC90","BMW"=>"X5");
if (array_key_exists("Volvo",$a))
  {
  //echo "Key exists!";
  }
else
  {
 // echo "Key does not exist!";
  }

///////19.array_keys()[Return an array containing the keys]///////
$a=array("Volvo"=>"XC90","BMW"=>"X5","Toyota"=>"Highlander");
//print_r(array_keys($a));

////////20...array_map()[Send each value of an array to a function, multiply each value by itself, and return an array with the new values]/
function myfunction2($v)
{
  return($v*$v);
}

$a=array(1,2,3,4,5);
//print_r(array_map("myfunction2",$a));

/////21...array_merge()[Merge two arrays into one array]//////
$a1=array("red","green");
$a2=array("blue","yellow");
//print_r(array_merge($a1,$a2));

//////22...array_merge_recursive()[Merge two arrays into one array]///////
$a1=array("a"=>"red","b"=>"green");
$a2=array("c"=>"blue","b"=>"yellow");
//print_r(array_merge_recursive($a1,$a2));

///23..array_multisort()[Return a sorted array in ascending order]////////
$a=array("Dog","Cat","Horse","Bear","Zebra");
array_multisort($a);
//print_r($a);


?>














