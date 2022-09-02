<?php
/**
 * 
 */
class myclass
{
	
	/*function myFunction()
	{
		echo "Inside myclass ->myFunction";
	}
}
$myclass = new myclass();
$myclass ->myFunction();
*/
/*public $i= 1;
function myFunction()
	{
		echo "Inside myclass ->myFunction";
		echo $this->i;
	}
}
$myclass = new myclass();
$myclass ->myFunction();
*/
public $i= 1;
function myFunction($i)
	{
		echo "Inside myclass ->myFunction";
		echo $this->i;
		echo $i;
	}
}
//$myclass = new myclass();
//$myclass ->myFunction(2);

class myClassImpl extends myclass{
	function myClassImplFunction(){
		echo "Inside myClassImpl->myClassImplFunction";
	}
}
$myClassImpl = new myClassImpl();
$myClassImpl-> myClassImplFunction();

?>




















