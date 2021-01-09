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
	if(isset($_REQUEST['slideaddcheck']))
	{

		
		$imgurl=trim($_REQUEST['imgurl']);

		$c1="select * from hightlight where text='$imgurl'";
		$res=mysqli_query($conn,$c1);
		$fl=mysqli_num_rows($res);

		if($fl==0){
			$sql="insert into hightlight (text) values ('$imgurl')";
			if(mysqli_query($conn,$sql)){
			echo '<font color="green">Inserted Successfully</font>';
			}
			else{
				echo '<font color="red">Inserted failur</font>';
			}
		}
		else{
			echo '<font color="red">Already Inputed</font>';
		}

		
		
	}else if(isset($_REQUEST['highlightaddcheck']))
	{
		
		$himgurl=trim($_REQUEST['himgurl']);
		$c2="select * from slideimg where img_url='$himgurl'";
		$res=mysqli_query($conn,$c2);
		$f2=mysqli_num_rows($res);
		// echo $f2;
		if($f2==0){
			$sql="insert into slideimg (img_url) values ('$himgurl')";
			if(mysqli_query($conn,$sql)){
			echo '<font color="green">Inserted Successfully</font>';
			}
			else{
				echo '<font color="red">Inserted failur</font>';
			}
		}
		else{
			echo '<font color="red">Already Inputed</font>';
		}
	}else if(isset($_REQUEST['resultup']))
	{
		$id=trim($_REQUEST['id']);
		$cid=trim($_REQUEST['cid']);
		$mark=trim($_REQUEST['mark']);
		$cgpa=trim($_REQUEST['cgpa']);


		$c3="select * from result where (course_no='$cid' and regi_id='$id') ";
		$res=mysqli_query($conn,$c3);
		$f3=mysqli_num_rows($res);
		// echo $f2;
		if($f3==0){
			$sql="insert into result (regi_id,course_no,mark,cgpa) values ('$id','$cid','$mark','$cgpa')";
			if(mysqli_query($conn,$sql)){
			echo '<font color="green">Result Inserted Successfully</font>';
			}
			else{
				echo '<font color="red"> Result Inserted failur</font>';
			}
		}
		else{
			echo '<font color="red">Result Already Inputed</font>';
		}
	}else if(isset($_REQUEST['deleteresult']))
	{
		$did=trim($_REQUEST['did']);
		$dcid=trim($_REQUEST['dcid']);

		$sql="delete from result where course_no='$dcid' and regi_id='$did' ";
		if(mysqli_query($conn,$sql)){
		echo '<font color="green"> Result Delete Successfully</font>';
		}
		else{
			echo '<font color="red">Result Delete failur</font>';
		}
	}else if(isset($_REQUEST['routineadd']))
	{
		$day=trim($_REQUEST['day']);
		$sem=trim($_REQUEST['sem']);
		$p1=trim($_REQUEST['p1']);
		$p2=trim($_REQUEST['p2']);
		$p3=trim($_REQUEST['p3']);
		$p4=trim($_REQUEST['p4']);


		$c4="select * from routine where day='$day' and semester='$sem' ";
		$res=mysqli_query($conn,$c4);
		$f4=mysqli_num_rows($res);
		// echo $f2;
		if($f4==0 and !($day=="")){
			$sql="insert into routine (day,semester,p1,p2,p3,p4) values ('$day','$sem','$p1','$p2','$p3','$p4')";
			if(mysqli_query($conn,$sql)){
			echo '<font color="green">Routine Inserted Successfully</font>';
			}
			else{
				echo '<font color="red">Routine Inserted failur</font>';
			}
		}
		else{
			echo '<font color="red">Routine Already Inputed</font>';
		}
	}else if(isset($_REQUEST['deleteroutine']))
	{
		$dday=trim($_REQUEST['dday']);
		$dsem=trim($_REQUEST['dsem']);

		$sql="delete from routine where semester='$dsem' and day='$dday' ";
		if(mysqli_query($conn,$sql)){
		echo '<font color="green">Delete Successfully Routine</font>';
		}
		else{
			echo '<font color="red">Routine Delete failur</font>';
		}
	}else if(isset($_REQUEST['deleteroutineall']))
	{

		$sql="TRUNCATE TABLE routine;";
		if(mysqli_query($conn,$sql)){
		echo '<font color="green">Delete Successfully All Routine</font>';
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
				<li class="active"><a href="admin.php">Admin Panel</a></li>
				<li ><a href="aboutus.php">About Us</a></li>
			</ul>
		</div>
		<nav class="anav" >
			<div class="ahome">
				<caption>
						<h3 style="text-align:center;  ">Home Update</h3>
				</caption>

				<form action="admin.php" method="post" enctype="multipart/form-data">
					Slide Image link:<input type="text" name="imgurl" placeholder="Image URL">
					<input type="submit" name="slideaddcheck" value="Add"class="buttom">
				</form>

				<div  style=" border: 1px solid gray; margin: 0 auto; border-radius: 10px;width: 50%; height: 120px; overflow: auto; background-color: white; text-align: center;">
					
				</div>


				<form action="admin.php" method="post" enctype="multipart/form-data">
					Highlight:<input type="text" name="himgurl" placeholder="Write Highlight">
					<input type="submit" name="highlightaddcheck" value="Add"class="buttom">
				</form>
				<div  style=" border: 1px solid gray; margin: 0 auto; border-radius: 10px; width: 50%;  height: 120px; overflow: auto; background-color: white; text-align: center;">
					<?php
					$sql="SELECT * FROM hightlight";
					$res=mysqli_query($conn,$sql);
					$arr=mysqli_fetch_array($res);
					
					echo '<font color="green">'.$arr['text'].'</font>';

				?>
				</div>
			</div>
<!-- ----------------------------------------------------------------------------------------------------------------------------- -->
			<div class="aresult">
				<caption>
						<h3 style="text-align:center;  ">Result Update</h3>
					</caption>
				<form action="admin.php" method="post" enctype="multipart/form-data">
					<input type="Number" name="id" placeholder="ID">
					<input type="text" name="cid" placeholder="Course Code">
					<input type="Number" name="mark" placeholder="Mark">
					<input type="text" name="cgpa" placeholder="CGPA">
					<input type="submit" name="resultup" value="Add"class="buttom">
				</form>
				<hr>
				<form action="admin.php" method="post" enctype="multipart/form-data">
					<input type="Number" name="did" placeholder="ID">
					<input type="text" name="dcid" placeholder="Course Code">
					<input type="submit" name="deleteresult" value="Delete"class="buttom">
				</form>
				<hr>
				<div  style=" border: 1px solid gray; margin: 0 auto; border-radius: 10px;width: 80%; height: 300px; overflow: auto; background-color: white; text-align: center;">

					<?php 

						$sql="SELECT * FROM (reg INNER JOIN result ON reg.id=result.regi_id) INNER JOIN syllabus ON result.course_no=syllabus.course_no";
						$res=mysqli_query($conn,$sql);
						echo '<table border="2">';
						echo '<tr>';
							
							echo '<th>'.'ID'.'</th>';
							echo '<th>'.'Name'.'</th>';
							echo '<th>'.'Course Code'.'</th>';
							echo '<th>'.'Course Title'.'</th>';
							echo '<th>'.'Credit'.'</th>';
							echo '<th>'.'Grade Point'.'</th>';
							
						echo '</tr>';
						
						while($arr=mysqli_fetch_array($res))
						{
							echo '<tr>';
							echo '<td>'.$arr['id'].'</td>';
							echo '<td>'.$arr['name'].'</td>';
							echo '<td>'.$arr['course_no'].'</td>';
							echo '<td>'.$arr['title'].'</td>';
							echo '<td>'.$arr['credit'].'</td>';
							echo '<td>'.$arr['cgpa'].'</td>';
							echo '</tr>';
						}
						echo '</table>';


					 ?>
					
				</div>

			</div>
<!-- ----------------------------------------------------------------------------------------------------------------------------- -->
			<div class="aroutine">
				<caption>
						<h3 style="text-align:center;  ">Routine Update</h3>
					</caption>
				<form action="admin.php" method="post" enctype="multipart/form-data">
					<input type="text" name="day" placeholder="Day">
					<input type="text" name="sem" placeholder="Semester=1st">
					<input type="text" name="p1" placeholder="08:30 - 09:55">
					<input type="text" name="p2" placeholder="10:00 - 11:25">
					<input type="text" name="p3" placeholder="11:30 - 12:55">
					<input type="text" name="p4" placeholder="01:00 - 02:55">
					<input type="submit" name="routineadd" value="Add"class="buttom">
				</form>
				<hr>
				<form action="admin.php" method="post" enctype="multipart/form-data">
					<input type="text" name="dday" placeholder="Day">
					<input type="text" name="dsem" placeholder="Semester">
					<input type="submit" name="deleteroutine" value="Delete"class="buttom">
					<input type="submit" name="deleteroutineall" value="All_Delete"class="buttom">
				</form>
				<hr>
				<div  style=" border: 1px solid gray; margin: 0 auto; border-radius: 10px;width: 80%; height: 300px; overflow: auto; background-color: white; text-align: center;">
					<?php 

						$sql="SELECT * FROM routine";
						$res=mysqli_query($conn,$sql);
						echo '<table border="2">';
						echo '<tr>';
							
							echo '<th>'.'Day'.'</th>';
							echo '<th>'.'Semester'.'</th>';
							echo '<th>'.'08:30 - 09:55'.'</th>';
							echo '<th>'.'10:00 - 11:25'.'</th>';
							echo '<th>'.'11:30 - 12:55'.'</th>';
							echo '<th>'.'01:00 - 02:55'.'</th>';
							
						echo '</tr>';
						
						while($arr=mysqli_fetch_array($res))
						{
							echo '<tr>';
							echo '<td>'.$arr['day'].'</td>';
							echo '<td>'.$arr['semester'].'</td>';
							echo '<td>'.$arr['p1'].'</td>';
							echo '<td>'.$arr['p2'].'</td>';
							echo '<td>'.$arr['p3'].'</td>';
							echo '<td>'.$arr['p4'].'</td>';
							echo '</tr>';
						}
						echo '</table>';


					 ?>



				</div>

			</div>














		</nav>


		<?php
			include("include/footer.php");
		?>

	</div>



</body>
</html>

