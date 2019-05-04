<?php
$age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");

foreach($age as $x => $x_value) {

	
    echo "Key=" . $x . ", Value=" . $x_value;
}
?>
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/custom.css">
  <script src="js/jquery.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
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

				<li><a href="#">
					<?php
			foreach($age as $x) {

	?>
	<li><a href="#">
		<?php
    echo "Key=" . $x . ", Value=" . $x_value ;
}?>
							
				</a></li>

						
					
					
						</ul>
				</div>
				</div>
			</div>
		</div> </div> </div>
	</nav>


	</a></li>
	

</body>
</html>