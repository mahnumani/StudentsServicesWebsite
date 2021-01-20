<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8"/>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="author" content="Abu Hanif Numani">
	<title>Syllabus</title>
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
				<li class="active"><a href="syllabus.php">Syllabus</a></li>
				<li><a href="aboutus.php">About Us</a></li>
			</ul>
		</div>
		<nav class="snav" >
			<table>
					<caption>
						<h3 style="text-align:center; ">Syllabus</h3>
					</caption>
					<tr>
						<th >Program</th>
						<th>Download</th>
					</tr>
					<tr>
						<td>B.A.(Hons.) in English</td>
						<td><a href="https://www.neub.edu.bd/files/syllabus/B.A.(Hons.)%20in%20English.pdf" target="_blank""><i class="fa fa-download" id="rdownload"></i></a></td>
					</tr><tr>
						<td>B.S.S. (Honors) in Applied Sociology and Social Work</td>
						<td><a target="_blank" href="https://www.neub.edu.bd/files/syllabus/B.S.S.%20(Honors)%20in%20Applied%20Sociology%20and%20Social%20Work.pdf"><i class="fa fa-download" id="rdownload" ></i></a></td>
					</tr><tr>
						<td>BBA</td>
						<td><a target="_blank" href="https://www.neub.edu.bd/files/syllabus/BBA.pdf"><i class="fa fa-download" id="rdownload"></i></a></td>
					</tr><tr>
						<td>CSE</td>
						<td><a target="_blank" href="https://www.neub.edu.bd/files/syllabus/CSE%20syllabus,%20NEU%20Revised%20(01.04.2013).pdf"><i class="fa fa-download" id="rdownload"></i></a></td>
					</tr><tr>
						<td>LL.B (Hons.)</td>
						<td><a  target="_blank" href="https://www.neub.edu.bd/files/syllabus/LL.B%20(Hons.).pdf"><i class="fa fa-download" id="rdownload"></i></a></td>
					</tr>
			</table><br><br>
			<div class="rfilter">
			<form >
				<fieldset>
					<legend>Fitering</legend>
					<input type="text" name="" placeholder="Dept." >
					<input type="text" name="" placeholder="Course Code" >
					<input type="text" name="" placeholder="title">
					<input type="submit" name="Search" value="Search" class="buttom">
					
				</fieldset>
			</form>
		</div><br><br>
				<?php 
						//DBMS CONNECTION
					include("include/config.php");

						$sql="SELECT * FROM syllabus";
						$res=mysqli_query($conn,$sql);
						echo '<table border="2">';
						
						echo '<tr>';
							
							echo '<th>'.'Course Code'.'</th>';
							echo '<th>'.'Course Title'.'</th>';
							echo '<th>'.'Credit'.'</th>';
							echo '<th>'.'Description'.'</th>';
							
						echo '</tr>';
						
						while($arr=mysqli_fetch_array($res))
						{
							echo '<tr>';
							echo '<td>'.$arr['course_no'].'</td>';
		
							echo '<td>'.$arr['title'].'</td>';
							echo '<td>'.$arr['credit'].'</td>';
							echo '<td>'.$arr['description'].'</td>';
							
							echo '</tr>';
						}
						echo '</table>';


					 ?>


		</nav>

		<?php
			include("include/footer.php");
		?>

	</div>



</body>
</html>


