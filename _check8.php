<?php
include 'conn.php';


$sql=mysqli_query($con,"TRUNCATE TABLE checked");
if (isset($_POST['save']))
 {

	$carss=$_POST['car'];
	$chkNew = ""; 
	foreach ($carss as $car ) 
	{

		
		$chkNew .=$car."," ;
	
 

$sel_cars[]=$car;
		
}
$query = "INSERT INTO `checked` (`cars`) VALUES ('$chkNew')";
 
 mysqli_query($con,$query) or die(mysqli_error());

}	

header("location:check9.php");
?>