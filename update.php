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
						<li><a href="pastQuestion.php">Past Questions |</a></li>
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
			<div id="mainUpdate">
				<form method="post" enctype="multipart/form-data">
					<fieldset class="adminfield"nctype="multipart/form-data"><fieldset id="fieldset" >
						<legend>Update Profile Picture</legend>
						Select image to upload:
						<input type="file" name="fileToUpload" id="fileToUpload">
						<input type="submit" value="Upload Image" name="submit">
					</fieldset>
				</form>
				<form method="post">
					<fieldset class="adminfield">
						<legend>Update Personal Information</legend>
						First Name: <input type="text" name="firstname" placeholder="First Name" id="fname" required="required"><br/>
                        <br/>Last Name:<input type="text" name="lastname" placeholder="Last Name" id="lname" required="required"><br>
						<br/>E-Mail:<input type="text" name="email" placeholder="E-Mail" id="lname" required="required" ><br>
						<br/>Phone NO:<input type="text" name="phonenumber" placeholder="phonenumber" id="lname" required="required" ><br>
		    			<br/>Password: <input type="text" name="password" id="pword" placeholder="Password" required="required" autocomplete="off"><br/>
                   		<br/>Verify Password: <input type="text" name="verifypassword" placeholder="Verify Password" id="vpword" required="required" autocomplete="off"><br>
                        <br/>Date Of Birth: <input type="date" name="dob" id="dob"><br/>
                        <br/>Option:<select id="option" name="option">
                           				<option></option>
                            			<option>Mathematics</option>
                                		<option>Economics</option>
                                		<option>Engineering</option>
                                	</select><br />
                        <br>Level:<select id="level" name="level"></br>
                        				<option></option>
                                		<option>Graduate</option>
                                		<option>100L</option>
                                		<option>200L</option>
                                		<option>300L</option>
                                		<option>400L</option>
                                		 <option>500L</option>
                                	</select><br />
                                		Gender: Male<input type="radio" checked name="gender" class="gender" value="male"> Female<input type="radio" name="gender" value="female">
                        <br><input type="submit" value="Update!" id="reg" name="update">
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
 if(isset($_POST["submit"])){
$target_dir = "profilePics/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
$filename = basename($_FILES["fileToUpload"]["name"]);
// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
    if($check !== false) {
        $uploadOk = 1;
    } else {
        echo"<script>alert('File is not an image.');</script>";
        $uploadOk = 0;
    }
}
// Check file size
if ($_FILES["fileToUpload"]["size"] > 500000000000000) {
   echo  "<script>alert('Sorry, your file is too large.');</script>";
    $uploadOk = 0;
}
// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
   echo  "<script>alert('Sorry, only JPG, JPEG, PNG & GIF files are allowed.');</script>"; 
    $uploadOk = 0;
}
// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
   echo  "<script>alert('Sorry, your file was not uploaded.');</script>";
// if everything is ok, try to upload file
} else {
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
	//put tis @ the end
        echo "<script>alert('your profile picture have been updated');</script>";
					 $_SESSION['profilepicture']=$filename;
					 $dbhost = "localhost";
					 $dbuser = "root";
					 $dbpass = "";
					 $dbname = "cscSAS";
					 $conn = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname) or die("Cannot Connect to the Mysql Database. Please try again later!");
					  if($conn){
								$username=$_SESSION['username'];
								$sql="UPDATE `cscstudents` SET `profilepicture`= '$filename' WHERE `username` = '$username'";
								//UPDATE `cscstudents` SET `profilepicture` = 'ppro' WHERE `cscstudents`.`id` = 3 LIMIT 1;
								$result = mysqli_query($conn, $sql)or die("Can not select from table 1");
								mysqli_close($conn);//close the connection
								header('Location:profile.php');
								}
    } else {
       echo  "<script>alert('Sorry, there was an error uploading your file pls try again later.');</script>";
    }
}
}
if(isset($_POST['update'])){
$id=$_SESSION['id'];
$firstname = test_input($_POST["firstname"]);
$lastname = test_input($_POST["lastname"]);
$email = test_input($_POST["email"]);
$phonenumber = test_input($_POST["phonenumber"]);
$level = test_input($_POST["level"]);
$option = test_input($_POST["option"]);
$gender= test_input($_POST["gender"]);
$dob = test_input($_POST["dob"]);
$password=$_POST["password"];
$verifypassword=$_POST["verifypassword"];
 $dbhost = "localhost";
 if($verifypassword==$password){
					 $dbuser = "root";
					 $dbpass = "";
					 $dbname = "cscSAS";
					 $conn = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname) or die("Cannot Connect to the Mysql Database. Please try again later!");
					  if($conn){
					$sql="UPDATE `cscstudents` SET `firstname` = '$firstname', `lastname` = '$lastname', `email` = '$email', `phonenumber` = '$phonenumber', `level` = '$level', `option` = '$option', `gender` = '$gender', `dob` = '$dob' , `password` = '$password' WHERE `id` = '$id'";
					  $result = mysqli_query($conn, $sql)or die("Can not select from table 1");
					  mysqli_close($conn);//close the connection
							$_SESSION["firstname"]=$firstname;
							$_SESSION["lastname"]= $lastname;
							$_SESSION["email"]= $email;
							$_SESSION["phonenumber"]= $phonenumber;
							$_SESSION["level"] = $level;
							$_SESSION["option"]=$option;
							$_SESSION["gender"]=$gender;
							$_SESSION["dob"]= $dob;
							$_SESSION["password"]= $password;
					  }
echo "<script>alert('your information have been updated.');</script>";
} else echo "<script>alert('password and verifaypassword must be the same')</secipt>";
}
function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?> 