<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8"/>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="author" content="Abu Hanif Numani">
	<title>Home</title>
	<link rel="stylesheet" href="css/stylesheet.css"/>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
	<div class="wrapper">
		
		<?php
			include("include/hederare.php");
		?>


		<div class="subheader">
			<ul>
				<li><a href="home.php">Home</a></li>
				<li><a href="result.php">Result</a></li>
				<li><a href="course.php">Offer Course</a></li> 
				<li><a href="routine.php">Routine</a></li>
				<li><a href="syllabus.php">Syllabus</a></li>
				<li><a href="aboutus.php">About Us</a></li>
			</ul>
		</div>
		<nav class="lognav" >
			<div>
			
			<br/><br/><br/><br><br>
			
			<h3> LogIn</h3>
			
			<form action=" " >
				<input type="email"  placeholder="Email"required=""><br>
				<input type="password"  placeholder="Password"required=""><br>
				<input type="submit"  value="Login" class="buttom"><br>
				
				<a href=""><strong>Forgot Password </strong></a>
				     |	
				<a href="signup.php"> <strong>Create an account</strong></a>
			
			</form>
				
			</div>
		</nav>


		
		<?php
			include("include/footer.php");
		?>
	</div>



</body>
</html>

