<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8"/>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="author" content="Abu Hanif Numani">
	<title>Home</title>
	<link rel="stylesheet" href="css/stylesheet.css"/>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

	<?php
	//DBMS CONNECTION
	include("include/config.php");

	//insert data from signup:
	if(isset($_REQUEST['signupcheck']))
		{
			
			$name=trim($_REQUEST['name']);
			$id=trim($_REQUEST['id']);
			$dept=trim($_REQUEST['dept']);
			$email=trim($_REQUEST['email']);
			$phone=trim($_REQUEST['phone']);
			$pass=trim($_REQUEST['password']);

			$sql="insert into reg values ('$name','$id','$dept','$email','$phone','$pass')";
			if(mysqli_query($conn,$sql)){
				// $mas="Sign Up Successfully";
				echo "<script type='text/javascript'>alert(\"Sign Up Successfully\");</script>";
			}
			else{
				// $mas="Error: Your ID already used";
				echo "<script type='text/javascript'>alert(\"Sign Up Successfully\");</script>";
			}
			

			
	}




	?>
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
			<h3> SignUp </h3>
			
			<form action="signup.php" method="post" enctype="multipart/form-data">
				<table>
					<tr><td><input type="text" name="name" placeholder="Name"></td></tr>
					<tr><td><input type="number" name="id" placeholder="ID"required=""></td></tr>
					<tr><td><input type="text" name="dept" placeholder="Department"required=""></td></tr>
					<tr><td><input type="email" name="email" placeholder="Email"required=""></td></tr>
					<tr><td><input type="number" name="phone" placeholder="Phone"required=""></td></tr>
					<tr><td><input type="password" name="password" placeholder="Password"required=""></td></tr>
					<tr><td><input type="file" name="myFile"></td></tr>
					
					
					<tr >							
						<!-- <td colspan="2"> -->
					<td>
						<input type="submit" name="signupcheck" value="SignUp" class="buttom" onClick="ff()"> 
					</td></tr>
					
				</table>
				
			</form>
			
		</div>
		</nav>
		

		<?php
			include("include/footer.php");
		?>
	</div>



</body>
</html>

