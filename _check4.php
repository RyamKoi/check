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
			$str.='<br/>'.$k.'<input type="checkbox" checked value="'.$v.'" name="car[]"/>';
		}
		else
		{
			$str.='<br/>'.$k.'<input type="checkbox" value="'.$v.'" name="car[]"/>';
		}
		
	}
	return $str;
}
if (isset($_POST['save']))
 {
	$cars=$_POST['car'];
	foreach ($cars as $car ) 
	{
		

		echo $car." ," ;
		$sel_cars[]=$car;

}
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Trial</title>
</head>
<body>
<form action="<?php echo $_SERVER['PHP_SELF']?>" method="POST">
	<?php echo get_cars($sel_cars);?>
	<input type="submit" name="save" value="Save">
	
</form>
</body>
</html>