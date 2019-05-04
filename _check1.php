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
 
 mysqli_query($con,$query) or die(mysqli_error());

 echo "Successfully Submitted.";

}

 //header("location:check.php");
?>
