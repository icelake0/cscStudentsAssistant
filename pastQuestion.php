<?php
session_name('user');
session_start();
if(isset($_SESSION['matricnumber'])==false)
header('Location:index.php');
?>
<html>
	<head>
		<title>Student Assistance System</title>
		<link type="text/css" rel="stylesheet" href="styles/style.css">
		<link type="text/css" rel="stylesheet" href="styles/slider.css">
		<link rel="icon" type="image/jpg" href="images/logo.jpg" />
	</head>
	<body>
		<div id="pageWrapper">

			<div id="header">
				<div id="logo">
					<img src="images/logo.jpg">
					
				</div>
				<div id="headtitle">
					<h3>Computer Sci. & Eng. Department</h3>
					<p class="up">Student Assistance System</p>
				</div>
				<div id="headRight">
					
					<div id="rightTitle">
						<h2>Student Assistance System</h2>
						<div id="features">
							<p>Download Materials</p>
							<p class="up">Download Materials</p>
							<p class="rup"><strong>View Courses</strong></p>

						</div>
					</div>
				</div>
				<div class="clearfix"></div>

			</div> <!-- End of header-->
			
			<div id="access">
				<div id="profileNav">
					<ul>
						<li><a href="profile.php">Profile Page |</a></li>
						<li><a href="textbook.php">TextBooks |</a></span></li>
						<li><a href="pastQuestion.php"><span style="background-color: black; padding: 4px;">Past Questions |</span></a></li>
						<li><a href="office.php">Locate Office |</a></li>
						<li><a href="Courses.php">Courses |</a></li>
						<li><a href="logout.php">Log Out</a></li>
					</ul>
				</div>
			</div>

			<div id="mainContent">
				<div id="ppix">
					<?php echo "<img src='profilePics/",$_SESSION['profilepicture'],"' alt='profile pics' width='200px' height='200px' onError='this.src='Screenshot.png''>&nbsp"; ?>
				</div>
				<div id="pdetails">
					<?php echo "<p>Name : ",$_SESSION['lastname']," ",$_SESSION['firstname'],"</p>";?>
					<?php echo "<p>Matric No.: ",$_SESSION['matricnumber'],"</p>";?>
					<?php echo "<p>User Name: ",$_SESSION['username'],"</p>";?>
					<?php echo "<p>Level: ",$_SESSION['level'],"</p>";?>
					<?php echo "<p>Gender: ",$_SESSION['gender'],"</p>";?>
					<?php echo "<p>E-gmail: ",$_SESSION['email'],"</p>";?>
				</div>
				<div class="clearfix"></div>
				
			</div>

			<table>
				<tbody>
						<?php
								 $dbhost = "localhost";
								 $dbuser = "root";
								 $dbpass = "";
								 $dbname = "cscSAS";
										$conn = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname) or die("Cannot Connect to the Mysql Database. Please try again later!");
											  if($conn){
											  $sql="SELECT name FROM cscpastquestions ";
											  $result = mysqli_query($conn, $sql)or die("Can not select from table 1");
											  if (mysqli_num_rows($result) > 0) {
												while($row = mysqli_fetch_assoc($result)) {
												foreach($row as $x => $x_value) {
									echo "<tr align='center'><td id='bookname' width='70%'>",$x_value,"</td><td width='30%'><a href='pastquestions/".$x_value."' target='_BLANK'><img width='100px'src='downloadimage.png'></a></td></tr>";
																}
											  }
											  }
}
?>
				</tbody>
			</table>			
            
			<div id="eis_footer">
				&copy;2016 - <b>Computer Science & Engineering Student Assistance System</b>
			</div>

		</div> <!-- End of pageWrapper-->



		
	</body>
</html>
<table>