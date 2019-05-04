<?php
include 'conn.php';

$checkbox = $_POST['car'] ;  
if ($_POST["submit" ]=="submit")  
{  
for ($i=0; $i<sizeof ($checkbox);$i++) {  
$query="INSERT INTO `checked` (`id`,`cars`) VALUES ('','".$checkbox[$i]. "')";  
$result=mysqli_query($con,$query) or die(mysqli_error());  
}  
echo "Record is inserted";  
}  
else
{
	echo "not inserted";
}

//header("location:check1.php");
?>
