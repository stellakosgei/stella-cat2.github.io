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
    		background-color: grey;}
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
<form method="GET">
		<br>MATHS<br>
		<input   type="number" placeholder="marks" name="math" required="">
		<br>ENGLISH<br>
		<input   type="number" placeholder="marks" name="eng" required="">
		<br>KISWAHILI<br>
		<input   type="number" placeholder="marks" name="kis" required="">
		<br>BIOLOGY<br>
		<input   type="number" placeholder="marks" name="bio" required="">
		<br>CHEMISTRY<br>
		<input   type="number" placeholder="marks" name="chem" required="">
		<br>PHYSICS<br>
		<input   type="number" placeholder="marks" name="phy" required="">
		<br>CRE<br>
		<input   type="number" placeholder="marks" name="cre" required="">
		<br>COMPUTER<br>
		<input   type="number" placeholder="marks" name="comp" required="">
		<br>HISTORY<br>
		<input   type="number" placeholder="marks" name="hist" required="">
		<br>GEOGRAPHY<br>
		<input   type="number" placeholder="marks" name="geo" required="">
<br>
<br>
		
		<button class="btn-success">SUBMIT</button>
		<button class="btn-danger">RESET</button>
	</form>	

	 <?php 

$a= $_GET["math"];
$b= $_GET["eng"];
$c= $_GET["kis"];
$d= $_GET["bio"];
$e= $_GET["chem"];
$f= $_GET["phy"];
$g= $_GET["cre"];
$h= $_GET["comp"];
$i= $_GET["hist"];
$j= $_GET["geo"];
$grade= ($a+$b+$c+$d+$e+$f+$g+$h+$i+$j+$j)/10;
echo "$grade";


	 if (isset($_GET['grade'])) {

	 		$grade=$_GET['grade'];
	 }
	 if($grade>=80){
     
     echo "Your grade is  <strong>A </strong>";
	 }
	 elseif ($grade>=75)
	 {
	 	echo "Your grade is <strong>A-</strong>";
	 }
	 elseif($grade>=70)
	 {
	 	echo "Your grade is <strong>B+</strong>";
	 }
	 elseif($grade>=65)
	 {
	 	echo "Your grade is <strong>B</strong>";
	 }elseif($grade>=60)
	 {
	 	echo "Your grade is <strong>B-</strong>";
	 }
	 elseif($grade>=55)
	 {
	 	echo "Your grade is <strong>C+</strong>";
	 }
	 elseif($grade>=50)
	 {
	 	echo "Your grade is <strong>C</strong>";
	 }
	 elseif($grade>=45)
	 {
	 	echo "Your grade is <strong>C-</strong>";
	 }
	 elseif($grade>=40)
	 {
	 	echo "Your grade is <strong>D+</strong>";
	 }
	 elseif($grade>=35)
	 {
	 	echo "Your grade is <strong>D</strong>";
	 }
	 elseif($grade>=30)
	 {
	 	echo "Your grade is <strong>D-</strong>";
	 }
	 elseif($grade>=25)
	 {
	 	echo "Your grade is <strong>E</strong>";

	 }
else{
	echo "REPEAT";
}

	 ?>

</body>
</html>