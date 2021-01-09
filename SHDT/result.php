<?php 
if(0) header("location: home.php");
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8"/>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="author" content="Abu Hanif Numani">
	<title>result</title>
	<link rel="stylesheet" href="css/stylesheet.css"/>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
	<!-- ------------------------------------------all popup---------------------------------------- -->
	<div id="popupdiv">
		<div class="resultsheet"> 
			<h6 style="color: white; font-weight: bold; display: inline-block;font-size: 14px;"> Retult Sheet </h6>
			<i class="fa fa-close" style="float:right; color:white; " onclick="fclose()"></i>
			<div class="subresultsheet">
				<table >
					<tr>
						<th><img src="img/0.jpg" alt="logo image" style="width: 100px;height: 100px;border-radius:  50px;"><br></th>
						<th> 
							<h4>Abu Hanif Numani</h4><br>
							<h5>ID: 170103020067</h5>
							<h5>Session: Spring17</h5>
						</th>
						
					</tr>
					
				</table>
				<table>
					<tr>
						<th>
							Total complete cradit: 106c.<br>
							Grade: A.<br>
							CGPA: 3.78.<br>
							Course: 47.
						</th>
					</tr>
				</table>
				<table>
					<tr >
						<th style="background-color:  white;">
							Semester
						</th>
						<th style="background-color:  white;">
							Credit
						</th>
						<th style="background-color:  white;">
							CGPA
						</th>
					</tr>
					<tr>
						<th>
							Spring
						</th>
						<th>
							12.0
						</th>
						<th>
							3.44
						</th>
					</tr>
					<tr>
						<th>
							Summar
						</th>
						<th>
							10.5
						</th>
						<th>
							3.79
						</th>
					</tr>
				</table>
			</div>
		
		</div>
	</div>
	
	<!-- ------------------------------------------end---------------------------------------- -->
	<div class="wrapper">

		<?php
			include("include/hederare.php");
		?>

		<div class="subheader">
			<ul>
				<li><a href="home.php">Home</a></li>
				<li class="active"><a href="result.php">Result</a></li>
				<li><a href="course.php">Offer Course</a></li> 
				<li><a href="routine.php">Routine</a></li>
				<li><a href="syllabus.php">Syllabus</a></li>
				<li><a href="aboutus.php">About Us</a></li>
			</ul>
		</div>
		
		<nav class="rtable">
			<div class="rfilter">
				<form >
					<fieldset>
						<legend>Fitering</legend>
						<input type="text" name="" placeholder="ID" >
						<input type="text" name="" placeholder="Dept." >
						<input type="text" name="" placeholder="Session">
						<input type="submit" name="Search" value="Search" class="buttom">
						
					</fieldset>
				</form>
			</div>	
			<?php 
						//DBMS CONNECTION
					include("include/config.php");

						$sql="select name,id,dept,phone,sum(mark),avg(cgpa) from test group by id";
						$res=mysqli_query($conn,$sql);
						echo '<table border="2">';
						echo '<caption>';
						echo '<h3 style="text-align:center; ">Result</h3>';
					    echo '</caption>';
						echo '<tr>';
							
							echo '<th>'.'ID'.'</th>';
							echo '<th>'.'Name'.'</th>';
							echo '<th>'.'Department'.'</th>';
							echo '<th>'.'Phone'.'</th>';
							echo '<th>'.'Total Mark'.'</th>';
							echo '<th>'.'CGPA'.'</th>';
							
						echo '</tr>';
						
						while($arr=mysqli_fetch_array($res))
						{
							echo '<tr>';
							echo '<td>'.$arr['id'].'</td>';
							echo '<td class="rname" ><a href="result.php?view=yes&id='.$arr['id'].'"<h5>'.$arr['name'].'</h5></a></td>';
							echo '<td>'.$arr['dept'].'</td>';
							echo '<td>'.$arr['phone'].'</td>';
							echo '<td>'.$arr['sum(mark)'].'</td>';
							echo '<td>'.$arr['avg(cgpa)'].'</td>';
							echo '</tr>';
						}
						echo '</table>';


					 ?>
			
				<!-- -------------------------------------------------------------- -->
				<script type="text/javascript">
					
					function rseach()
					{								
						document.getElementById('popupdiv').style.display='block';	
					}
					function fclose(){
						document.getElementById('popupdiv').style.display='none';
					}
					window.onclick = function(event) {
					  if (event.target == popupdiv) {
					    popupdiv.style.display = "none";
					  }
					}

				</script>
				<!-- -------------------------------------------------------------- -->
				
		</nav>
		<?php
			include("include/footer.php");
		?>
 
	</div>



</body>
