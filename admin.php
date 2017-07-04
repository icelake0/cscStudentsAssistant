<?php
session_name('admin');
session_start();
if(isset($_SESSION['user'])==false)
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
			
            <div id="access" style="color: red">
				<p>Logged In As Admin</p>
				<p id="logout"><a href="adminlogout.php">Log Out</a></p>
			</div>

			<div id="adminContent">
				<form method="post" enctype="multipart/form-data">
					<fieldset class="adminfield">
						<legend>Upload TextBook</legend>
						Select A text book to upload:
						<input type="file" name="fileToUpload" id="fileToUpload">
						<input type="submit" value="Upload" name="uploadtextbook">
					</fieldset>
				</form>

				<form method="post" enctype="multipart/form-data">
					<fieldset class="adminfield">
						<legend>Upload Past Question</legend>
						Select pastquestion to upload:
						<input type="file" name="fileToUpload" id="fileToUpload">
						<input type="submit" value="Upload" name="uploadpastquestion">
					</fieldset>
				</form>

			</div>

			<div id="eis_footer">
				&copy;2016 - <b>Computer Science & Engineering Student Assistance System</b>
			</div>

		</div> <!-- End of pageWrapper-->
	</body>
</html>
 <?php
 if(isset($_POST["uploadpastquestion"])){
$target_dir = "pastquestions/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
$filename = basename($_FILES["fileToUpload"]["name"]);
// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" && $imageFileType != "pdf") {
   echo  "<script>alert('Sorry, only pdf,JPG, JPEG, PNG & GIF files are allowed.');</script>"; 
    $uploadOk = 0;
}
// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
   echo  "<script>alert('Sorry, your file was not uploaded.');</script>";
// if everything is ok, try to upload file
} else {
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
	//put tis @ the end
        echo "<script>alert('A pastquestion have been uploaded');</script>";
					 $dbhost = "localhost";
					 $dbuser = "root";
					 $dbpass = "";
					 $dbname = "cscSAS";
					 $conn = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname) or die("Cannot Connect to the Mysql Database. Please try again later!");
					  if($conn){
								$sql="INSERT INTO `cscpastquestions` (`name`) VALUES ('$filename')";
								$result = mysqli_query($conn, $sql)or die("Can not select from table 1");
								mysqli_close($conn);//close the connection
								}
    } else {
       echo  "<script>alert('Sorry, there was an error uploading your file pls try again later.');</script>";
    }
}
}
if(isset($_POST["uploadtextbook"])){
$target_dir = "books/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
$filename = basename($_FILES["fileToUpload"]["name"]);
// Allow certain file formats
if($imageFileType != "pdf") {
   echo  "<script>alert('Sorry, only pdf files are allowed.');</script>"; 
    $uploadOk = 0;
}
// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
   echo  "<script>alert('Sorry, your file was not uploaded.');</script>";
// if everything is ok, try to upload file
} else {
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
	//put tis @ the end
        echo "<script>alert('A Textbook have been uploaded');</script>";
					 $dbhost = "localhost";
					 $dbuser = "root";
					 $dbpass = "";
					 $dbname = "cscSAS";
					 $conn = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname) or die("Cannot Connect to the Mysql Database. Please try again later!");
					  if($conn){
								$sql="INSERT INTO `csctextbooks` (`bookname`) VALUES ('$filename')";
								$result = mysqli_query($conn, $sql)or die("Can not select from table 1");
								mysqli_close($conn);//close the connection
								}
    } else {
       echo  "<script>alert('Sorry, there was an error uploading your file pls try again later.');</script>";
    }
}
}
?> 