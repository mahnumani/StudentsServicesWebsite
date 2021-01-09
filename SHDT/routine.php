<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8"/>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="author" content="Abu Hanif Numani">
	<title>routine</title>
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
				<li ><a href="result.php">Result</a></li>
				<li><a href="course.php">Offer Course</a></li> 
				<li class="active"><a href="routine.php">Routine</a></li>
				<li><a href="syllabus.php">Syllabus</a></li>
				<li><a href="aboutus.php">About Us</a></li>
			</ul>
		</div>
		
		<nav class="routinetable">
			<div class="routinefilter">
				<form >
					<fieldset>
						<legend>Fitering</legend>
						<input type="text" name="" placeholder="Semester" >
						<input type="text" name="" placeholder="Dept." >
						<input type="text" name="" placeholder="Section" >
						<input type="submit" name="Search" value="Search" class="buttom">
						
					</fieldset>
				</form>
			</div>	
			<?php 
				//DBMS CONNECTION
				include("include/config.php");

				$sql="SELECT * FROM routine";
				$res=mysqli_query($conn,$sql);
				echo '<table border="2">';
				echo '<caption>';
				echo '<h3 style="text-align:center; ">Routine</h3>';
				echo '</caption>';
				echo '<tr>';

				echo '<th>'.'Day'.'</th>';
				// echo '<th>'.'Semester'.'</th>';
				echo '<th>'.'08:30 - 09:55'.'</th>';
				echo '<th>'.'10:00 - 11:25'.'</th>';
				echo '<th>'.'11:30 - 12:55'.'</th>';
				echo '<th>'.'01:00 - 02:55'.'</th>';

				echo '</tr>';

				while($arr=mysqli_fetch_array($res))
				{
				echo '<tr>';
				echo '<th>'.$arr['day'].'</th>';
				// echo '<td>'.$arr['semester'].'</td>';
				echo '<td>'.$arr['p1'].'</td>';
				echo '<td>'.$arr['p2'].'</td>';
				echo '<td>'.$arr['p3'].'</td>';
				echo '<td>'.$arr['p4'].'</td>';
				echo '</tr>';
				}
				echo '</table>';


				?>

			
				<br>
				<div class="selectcourse">
					<caption>
						<h3 >Select Course</h3>
					</caption>
					<!-- <hr> -->
				<!-- 	<form>
						<input type="text" name="" placeholder="title" >
						<input type="submit" name="Search" value="Search" class="buttom">
					</form> -->
					<!-- <hr> -->
					<div class="subselect">
						<form >
						<input type="checkbox" name="" style="margin: 10px;">MIS 111 Fundamentals of Mathematics <br>
						<input type="checkbox" name="" style="margin: 10px;">MIS125 Discrete Mathematics<br>
						<input type="checkbox" name="" style="margin: 10px;">MIS125 Discrete Mathematics<br>
						<input type="checkbox" name="" style="margin: 10px;">MIS125 Discrete Mathematics<br>
						<input type="checkbox" name="" style="margin: 10px;">MIS125 Discrete Mathematics<br>
						<input type="checkbox" name="" style="margin: 10px;">MIS125 Discrete Mathematics<br>
						<input type="checkbox" name="" style="margin: 10px;">MIS125 Discrete Mathematics<br>
						<input type="checkbox" name="" style="margin: 10px;">MIS125 Discrete Mathematics<br>
						<input type="checkbox" name="" style="margin: 10px;">MIS125 Discrete Mathematics<br>
						</form>
					</div>
					
					
				</div>

		</nav>
		<?php
			include("include/footer.php");
		?>

	</div>



</body>
