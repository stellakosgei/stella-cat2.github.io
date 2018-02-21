<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
	<link rel="stylesheet" type="text/css" href="bootstrap-3.3.7-dist/css/bootstrap.min.css">
    <script src="bootstrap-3.3.7-dist/js/jquery.min.js"></script>
    <script src="bootstrap-3.3.7-dist/js/bootstrap.min.js"></script>
   <style type="text/css">
    	body{text-align: center;
    		
    	}
    </style>
</head>
<body>
<nav class="navbar navbar-inverse">
	<div class="container-fluid">
		<div class="navbar-header">
			<a href="#" class="navbar-brand">SCHOOL SYSTEM</a>
		</div>
		<ul class="nav navbar-nav">
			<li><a href="homepage.php">HOME</a></li>
			<li><a href="grades.php">GRADING</a></li>
		</ul> 
</nav>
<h1>LAVIN ACADEMY</h1>
<img src="PICS/logo.png" align="left" class="logo" width="50" height="50">
<br>
<br>
<br>
<br>
<div class="col-sm-4">
	<p class="text-center"><strong>MOTTO</strong></p>
		<br>
		<img src="PICS/bac.jpeg" class="img-circle person" width="60" height="60">
		<br>
	<q>Budding towards higher horizons</q>
</div>
<div class="col-sm-4">
	<p class="text-center"><strong>MISSION</strong></p>
		<br>
		<img src="PICS/mission.jpeg" class="img-circle person" width="60" height="60">
	<p>Our mission is to develop young men with active and creative minds, a sense of understanding and compassion for others, and the courage to act on their beliefs. We stress the total development of each child: spiritual, moral, intellectual, social, emotional, and physical.</p>
</div>
<div class="col-sm-4">
	<p class="text-center"><strong>VISION</strong></p>
		<br>
		<img src="PICS/vision.jpeg" class="img-circle person" width="60" height="60">
	
<p>You need to have a crystal clear vision when you start out, otherwise you can get easily lost in deciding the best way forward. When you are making strategic decisions for your business and even daily operation decisions, your vision statement will give you the inspiration and targeted direction you need.</p>
</div>
<br>
<br>
<br>
<div>
	<form  method="_GET">
		
		<br>NAME<br><span class="glyphicon glyphicon-profile physical"></span>
		<input   type="text" placeholder="Enter full Name" name="Username Name" required="">
		<br>E-mail:<span class="glyphicon glyphicon-envelope"></span>
		 <br> 
		<input   type="email" placeholder="username@gmail.com" name="email" required="">
	<br>SCHOOL ID<br>
		<input   type="number" placeholder="ID number" name="ID" required="">

<br>Password
		 <br> 
		<input   type="Password" placeholder="*******" name="password1" required="">


<br> Confirm Password
		 <br> 
		<input   type="Password" placeholder="*******" name="pwd" required="" >
		

<br>
<br>
<button class="btn-success">SUBMIT</button>
<button class="btn-danger">RESET</button>
<br>
<br>

<?php 
$a=$_GET['password1'];
$b=$_GET['pwd'];
if ($a===$b) {
	# code...
	echo "";
} else {
	# code...
	echo "wrong Password";
}

 ?>

	</form>
</div>

</body>
</html>