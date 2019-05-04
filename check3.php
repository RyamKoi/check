<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/custom.css">
  <script src="js/jquery.min.js"></script>
  <script src="js/bootstrap.min.js"></script>

<style>
/* The container */
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
}

/* Hide the browser's default checkbox */
.container input {
  position: absolute;
  opacity: 0;
  cursor: pointer;
  height: 0;
  width: 0;
}

/* Create a custom checkbox */
.checkmark {
  position: absolute;
  top: 0;
  left: 0;
  height: 25px;
  width: 25px;
  background-color: green;
}

/* On mouse-over, add a grey background color */
.container:hover input ~ .checkmark {
  background-color: red;
}

/* When the checkbox is checked, add a blue background */
.container input:checked ~ .checkmark {
  background-color: yellow;
}

/* Create the checkmark/indicator (hidden when not checked) */
.checkmark:after {
  content: "";
  position: absolute;
  display: none;
}

/* Show the checkmark when checked */
.container input:checked ~ .checkmark:after {
  display: block;
}

/* Style the checkmark/indicator */
.container .checkmark:after {
  left: 9px;
  top: 5px;
  width: 5px;
  height: 10px;
  border: solid white;
  border-width: 0 3px 3px 0;
  -webkit-transform: rotate(45deg);
  -ms-transform: rotate(45deg);
  transform: rotate(45deg);
}
</style>
</head>
<body>
  <div class="container">
    <div class="col-md-4 col-md-offset-4">

<form method="post" action="_check2.php">

<h1>Custom Checkboxes</h1>
<label class="container">Lexus
  <input type="checkbox" name="car[ ]"  checked="checked">
  <span class="checkmark"></span>
</label>
<label class="container">Audi
  <input type="checkbox" name="car[ ]" >
  <span class="checkmark"></span>
</label>
<label class="container">Rolls Royce
  <input type="checkbox" name="car[ ]" >
  <span class="checkmark"></span>
</label>
<label class="container">BMW
  <input type="checkbox" name="car[ ]" >
  <span class="checkmark"></span>
</label>
<label>Submit
  <input type="submit" name="submit" value="submit">
</label>
</form>
</div>
</div>

</body>
</html>
