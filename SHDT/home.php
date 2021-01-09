<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8"/>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="author" content="Abu Hanif Numani">
	<title>Home</title>
	<link rel="stylesheet" href="css/stylesheet.css"/>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<style>
		table,th,td{
		border:1px solid gray;
		border-collapse:collapse;
		}
	</style>

</head>
<body>
	<?php

	//DBMS CONNECTION
	include("include/config.php");
	?>
	

	<!-- ------------------------------------------all popup---------------------------------------- -->
	<?php 

			
				if(isset($_REQUEST['Search']))
					{
						$ddid=trim($_REQUEST['ddid']);
						$c4="select name,id,dept,phone from ss where id='$ddid'";
						$res=mysqli_query($conn,$c4);
						$arr=mysqli_fetch_array($res);
						// echo "<h1> hello </h1>";
						echo '<div id="popupdiv"  >';
						echo '<div class="resultsheet"> ';
						echo '<h6 style="color: white; font-weight: bold; display: inline-block;font-size: 14px;"> Result Sheet </h6>';
						echo '<i class="fa fa-close" style="float:right; color:white; " onclick="fclose()"></i>';
						echo '<div class="subresultsheet">';
						echo '<table border="2">';
						echo '<tr>';
							
							echo '<th>'.'<img src="img/0.jpg" alt="logo image" style="width: 100px;height: 100px;border-radius:  50px;"><br>'.'</th>';
							echo '<th><h4>Name '. $arr['name'] .'</h4><br>
								<h5>ID:'. $arr['phone'] .'</h5>
								<h5>ID:'. $arr['id'] .'</h5>
								<h5>ID:'. $arr['dept'] .'</h5>
								</th>';
							
							
						echo '</tr>';
						
						
						echo '</table>';
echo ' <br>


				<table>
					<tr >
						<th style="background-color:  #00b3b3;">
							Semester
						</th>
						<th style="background-color:  #00b3b3;">
							Credit
						</th>
						<th style="background-color:  #00b3b3;">
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
	</div>';

					}



					 ?>
				
				
	
	<!-- ------------------------------------------end---------------------------------------- -->
	<div class="wrapper">

		

		<?php
			include("include/hederare.php");
		?>



		<div class="subheader">
			<ul>
				<li class="active"><a href="home.php">Home</a></li>
							
				<li><a href="result.php">Result</a></li>
				<li><a href="course.php">Offer Course</a></li> 
				<li><a href="routine.php">Routine</a></li>
			
				<li><a href="syllabus.php">Syllabus</a></li>
				<li><a href="admin.php">Admin Panel</a></li>
				<li><a href="aboutus.php">About Us</a></li>
			</ul>
		</div>
		<nav class="hnav" >
			<div class="slide">
				<div class="slideshow" id="slider">
					<div class="slides">
						<input type="radio" name="r" id="r1" checked>
						<input type="radio" name="r" id="r2" >
						<input type="radio" name="r" id="r3" >
						<input type="radio" name="r" id="r4" >
						<input type="radio" name="r" id="r5" >
						<div class="sld s1"><img src="img/computer lab.jfif" alt="" ></div>
						<div class="sld"><img src="img/download.jfif" alt="" ></div>
						<div class="sld"><img src="img/cs01.jpg" alt=""></div>
						<div class="sld"><img src="img/cs-cover.jpg" alt="" ></div>
						<div class="sld"><img src="img/download (1).jfif" alt=""></div>
					</div>
					<div class="slidenav">
						<label for="r1" class="bar"> </label>
						<label for="r2" class="bar"> </label>
						<label for="r3" class="bar"> </label>
						<label for="r4" class="bar"> </label>
						<label for="r5" class="bar"> </label>
					</div>


				</div>
				<script>
					var slideIndex = 0;
					showSlides();

					function showSlides() {
					  var i;
					  var slides = document.getElementsByClassName("sld");
					  var dots = document.getElementsByClassName("bar");
					  for (i = 0; i < slides.length; i++) {
						slides[i].style.display = "none";  
					  }
					  slideIndex++;
					  if (slideIndex > slides.length) {slideIndex = 1}    
					  for (i = 0; i < dots.length; i++) {
						dots[i].className = dots[i].className.replace(" active", "");
					  }
					  slides[slideIndex-1].style.display = "block";  
					  dots[slideIndex-1].className += " active";
					  setTimeout(showSlides, 2000); 
				}
				</script>
				
			</div>

			<!-- <?php

				//echo '<script>'

			?> -->

			<div class="searchResult">
				<form action="" method="post" enctype="multipart/form-data">
					<fieldset>
						<legend   >Find Result</legend>


						<br>

						<p>University&nbsp;&nbsp;:&nbsp;</p>
						<input type="text" name="" ><br>
								
						<p>Department:&nbsp;</p>
						<input type="text" name=""><br>

						<p>ID&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:&nbsp;</p>
						<input type="text" name="ddid"><br>
					
						<p>Session&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:&nbsp;</p>
						<input type="text" name=""><br>
					
						
							<input type="submit" name="Search" value="Search" class="buttom">
						
						<!-- -------------------------------------------------------------- -->
						<script type="text/javascript">
							
							function fseach()
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
						<input type="submit" name="Reset" value="Reset" class="buttom">
					</fieldset>
				</form>
			</div>
		</nav>
		<div class="highlights">
			<a href="home.php"><marquee ><h3>
				<?php
					$sql="SELECT * FROM hightlight";
					$res=mysqli_query($conn,$sql);
					$arr=mysqli_fetch_array($res);

					echo $arr['text'];

				?>
		    </h3></marquee></a>
		</div>
		


		<?php
			include("include/footer.php");
		?>

	</div>



</body>
</html>