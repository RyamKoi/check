<?php
include 'conn.php';
$sel_cars=array();
function get_cars($cn)
{
	$str='';
	$cars=array('Lexus'=>'lexus','Audi'=>'audi','Rolls'=>'rolls');
	while(list($k,$v)=each($cars))
	{
		if (in_array($v,$cn)) {
			# code...

	$str.= '<br/> '.$k.'<input type="checkbox" id="chkbox1" checked value="'.$v.'" name="car[]"/> ';  
			
		}

		else
		{
			$str.='<br/>'.$k.'<input type="checkbox" value="'.$v.'" name="car[]"/>';
		}
		
	}
	return $str;
}
$sql=mysqli_query($con,"TRUNCATE TABLE checked");
if (isset($_POST['save']))
 {

	$carss=$_POST['car'];
	$chkNew = ""; 
	foreach ($carss as $car ) 
	{

		
		$chkNew .=$car."," ;
		/*?>
		<li><a href="">
		<?php
		echo $car.", ";
		//echo "<br>";
	?>
	</a></li>
	<?php*/
 

$sel_cars[]=$car;
		
}
$query = "INSERT INTO `checked` (`cars`) VALUES ('$chkNew')";
 
 mysqli_query($con,$query) or die(mysqli_error());

}	

?>
<!DOCTYPE html>
<html>
<head>
	  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/custom.css">
  <script src="js/jquery.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <style type="text/css">
  	.container {
  display: block;
  position: relative;
  padding-left: 35px;
  margin-bottom: 12px;
  cursor: pointer;
  font-size: 22px;
  -webkit-user-select: none;
  -moz-user-select: none;
  -ms-user-select: none;
  user-select: none;
  font-style: bold;
  font-weight: 700;
}
.navbar-nav.navbar-center {
    position: absolute;
    left: 50%;
    transform: translatex(-50%);
}
  </style>

</head>
<body> 

	<nav class="navbar navbar-inverse ">
		<div class="container-fluid">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span> 
				</button>

				<a class="navbar-brand" href="#"> </a>
			</div>
			<div class="collapse navbar-collapse" id="myNavbar" >
				<div >
				<ul class="nav navbar-nav navbar-center" >
					<li class="active"><a href="checkbox.php">Home</a></li>

				
					<?php 
					error_reporting(0);
					
					foreach ($carss as $car ) 
					{
				?>
				<li><a href="#">
				<?php

						echo $car 	;
						 
						
		}
		
		
						?>
						</a>
					</li>
			
						</ul>
				</div>
				</div>
			</div>
		
	</nav>
	<div class="container">

		<div class="col-md-4 col-md-offset-4">
			<h2>Hello , Lets get choosing</h2>


<form action="<?php echo $_SERVER['PHP_SELF']?>" method="POST"  >
	   
	    <?php echo get_cars($sel_cars);?> 	 
	<br><input class="btn btn-primary btn-lg" type="submit" name="save" value="Save">
	
</form>
</div>
</div>
</body>
</html>