<?php
include 'conn.php';
include '_check8.php';
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

				<a class="navbar-brand" href="home.html"> </a>
			</div>
			<div class="collapse navbar-collapse" id="myNavbar" >
				<div >
				<ul class="nav navbar-nav navbar-center" >
					<li class="active"><a href="home.html">Home</a></li>

				
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


<form action="_check8.php" method="POST"  >
	   
	    <?php echo get_cars($sel_cars);?> 	 
	<br><input class="btn btn-primary btn-lg" type="submit" name="save" value="Save">
	
</form>
</div>
</div>
</body>
</html>