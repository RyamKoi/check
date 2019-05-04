<?php


include 'conn.php';

if (isset($_POST['submit']))
{
 $chkbox = $_POST['car'];
 
 $chkNew = ""; 
 
 foreach($chkbox as $chkNew1) 
 { 
 $chkNew .= $chkNew1 . ","; 

 } 
 
 $query = "INSERT INTO `checked` (`cars`) VALUES ('$chkNew')";
 
 $result=mysqli_query($con,$query) or die(mysqli_error());

echo "Submitted ";
}else
{
	echo "error";
}
?>
