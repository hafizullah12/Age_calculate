<?php
 if(isset($_POST['pm'])){
$a=$_POST['pm'];
$b=$_POST['pd'];
$c=$_POST['year1'];

$d = $_POST['bm'];
$e = $_POST['bd'];
$f = $_POST['year2'];



if(($c>$f))
{
	if(($a>=$d)&&($b>=$e)){
echo "your are";
	$g = $a-$d; //month

	$h = $b - $e; //days
	
		
	$i = $c - $f ; //years
	
	

	echo $i.'years';
	echo $g .'months';
		echo $h .'days';
			
	}
	
}




//2nd part

 if(($c>$f)) //year
	 
{
	if(($a<$d)) //month
	{
		
		if(($b>$e)) //days
	
	{
echo "your are";

	$g = ($a+12)-$d; //days

	$h = ($b) - ($e); //months
	
		
	$i = ($c-$f)-1  ; //years
	
	

	echo $i.'years';
	echo $g .'months';
		echo $h .'days';
	
	}
	
}
	
}	


//3rd part

 if(($c>$f)) //year
	 
{
	if(($a<$d)) //month
	{
		
		if(($b<$e)) //days
	
	{
echo "your are";

	$g = ($a+12)-$d; //days

	$h = (($b+30)-($e))-1; //months
	
		
	$i = ($c-$f)-1  ; //years
	
	

	echo $i.'years';
	echo $g .'months';
		echo $h .'days';
	
	
	}
	
}
	
}	

} //end of if
	
?>