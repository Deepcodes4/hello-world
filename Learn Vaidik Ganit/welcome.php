<?php
// Initialize the session
session_start();
 
// If session variable is not set it will redirect to login page
if(!isset($_SESSION['username']) || empty($_SESSION['username'])){
  header("location: login.php");
  exit;
}
?>
<!DOCTYPE html>
<html>
<head>
<title>Vedic Ganit</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<!-- Bootstrap -->
<link href="css/bootstrap.min.css" rel="stylesheet">
<link href="style.css" rel="stylesheet">
<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page
via file:// -->
<!--[if lt IE 9]>
<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/
html5shiv.js"></script>
<script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/
respond.min.js"></script>
<![endif]-->
</head>
<body>
<div class="header">
<h3>Hi <b><?php echo $_SESSION['username']; ?></b> , Welcome to Veidik Ganit Menu </h3>
<p><a href="logout.php" class="btn btn-danger">Log Out</a></p>
</div></br></br>
<div class="container">
    <h3>16 Main Formulas</h3></br>
	<div class="row">
	 <div class="col-md-3">
		<a class="btn btn-danger" href="rule1.php" target="_self">Ekadhikena Purvena</a>
	 </div>
	 <div class="col-md-3">
		<a class="btn btn-primary" href="rule2.html">Nikhilam navatascaramam Dasatah</a>
	 </div>
	 <div class="col-md-3">
		<a class="btn btn-warning" href="rule3.html">Urdhva - tiryagbhyam</a>
	 </div>
	 <div class="col-md-3">
		<a type="button" class="btn btn-success" href="rule4.html">Paravartya Yojayet</a>
	 </div>
	</div></br>
	<div class="row">
	 <div class="col-md-3">
		<button type="button" class="btn btn-warning" href="rule5.html">Sunyam Samya Samuccaye</a>
	 </div>
	 <div class="col-md-3">
		<a class="btn btn-success" href="rule6.html">Anurupye - Sunyamanyat</a>
	 </div>
	 <div class="col-md-3">
		<a class="btn btn-primary" href="rule7.html">Sankalana - Vyavakalanabhyam</a>
	 </div>
	 <div class="col-md-3">
		<a class="btn btn-info" href="rule8.html">Puranapuranabhyam</a>
	 </div>
	</div></br>
	<div class="row">
	 <div class="col-md-3">
		<a class="btn btn-danger" href="rule9.html">Calana - Kalanabhyam</a>
	 </div>
	 <div class="col-md-3">
		<a class="btn btn-primary" href="rule10.html">Ekanyunena Purvena</a>
	 </div>
	 <div class="col-md-3">
		<a class="btn btn-warning" href="rule11.html">Anurupyena</a>
	 </div>
	 <div class="col-md-3">
		<a class="btn btn-success" href="rule12.html">Adyamadyenantya - mantyena</a>
	 </div>
	</div></br>
	<div class="row">
	 <div class="col-md-3">
		<a class="btn btn-warning" href="rule13.html">Vilokanam</a>
	 </div>
	 <div class="col-md-3">
		<a class="btn btn-success" href="rule14.html">Antyayor Dasakepi</a>
	 </div>
	 <div class="col-md-3">
		<a class="btn btn-primary" href="rule15.html">Antyayoreva</a>
	 </div>
	 <div class="col-md-3">
		<a class="btn btn-info" href="rule16.html">Yavadunam Tavadunikrtya Varganca Yojayet</a>
	 </div></br>
	 
	</div></br>
	<div class="row">
	 <div class="col-md-3">
		<a class="btn btn-danger" href="rule17.html">Lopana Sthapanabhyam</a>
	 </div>
	 <div class="col-md-3">
		<a class="btn btn-primary" href="rule18.html">Gunita Samuccayah : Samuccaya Gunitah</a>
	 </div>
	</div></br>
</div>
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://code.jquery.com/jquery.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="js/bootstrap.min.js"></script>
</body>
</html>