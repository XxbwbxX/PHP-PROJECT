<!DOCTYPE html>
<html>
<head>
	<style type="text/css">
		
		
		label{font-size: 150%;color: cyan;font-family: verdana;}

	</style>
		<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css">
	<script type="text/javascript" src="bootstrap/js/bootstrap.js"></script>
	<script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="bootstrap/js/jquery.min.js"></script>
	<title></title>
</head>
<body>
	    		<nav class="navbar navbar-default">
    		<div class="container-fluid">
    		<div class="navbar-header">
    			<a class="navbar-brand" href="">WELCOME</a>
    		</div>
    		<ul class="nav navbar-nav">
    			<li class="active"><a href="">HOME</a></li>
    			<li><a href="">MY PROFILE</a></li>
    			
    			
    				<li><a href="">ABOUT US</a></li>
    			<li><a href="">CONTACT US</a></li>
    			<li><a href="login.php">LOGOUT</a></li>
    		
    		</ul>
    		</div>
    </nav>
    <br>
<div class="form-group col-sm-4 col-sm-offset-4 pannel pannel-body pannel-default">
	<legend style="text-align: center;font-size: 300%;font-family: impact;">ENTER YOUR GRADES</legend>
	<fieldset>
		<form>
			<label>MATHS:</label>
			<input class="form-control" type="number" name="m">
			<br>
			<label>ENGLISH:</label>
			<input class="form-control"  type="number" name="e">
			<br>
			<label>KISWAHILI:</label>
			<input class="form-control"  type="number" name="k">
			<br>
			<label>CHEMISTRY:</label>
			<input class="form-control"  type="number" name="c">
			<br>
	        <label>BIOLOGY:</label>
			<input class="form-control"  type="number" name="b">
			<br>
			<label>PHYSICS:</label>
			<input class="form-control" type="number" name="p">
			<br>
			<label>COMPUTER:</label>
			<input class="form-control"  type="number" name="cp">
			<br>
			<?php 
			$mat=$_GET["m"];
			$eng=$_GET["e"];
			$kis=$_GET["k"];
			$chem=$_GET["c"];
			$bio=$_GET["b"];
			$phy=$_GET["p"];
			$comp=$_GET["cp"];

			?>
			<button class="btn btn-lg btn-success">CALCULATE GRADES</button>
			<br>
			<?php 
			$total=$mat+$eng+$kis+$chem+$bio+$phy+$comp;
			$mean=$total/7;
			echo $mean;
			?>
			<?php
			if ($mean>80) 
			 	{echo "A";}
			 	elseif ($mean>70) {
			 		echo "B";}
			 		elseif ($mean>60) {
			 			echo "C";}

			 			elseif ($mean>50) {
			 			 	echo "D";
 			 			 } 
 			 			 elseif ($mean>40) {
 			 			 	echo "E";}
 			 			 	else{echo "FAIL";}
 			 			 ?>
		</form>
	</fieldset>
</div>
</body>
</html>