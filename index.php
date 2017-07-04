<?php ob_start(); ?>
<!DOCTYPE html>
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
							<p>Download Materials, view courses and find offices</p>
							 
						</div>
					</div>
				</div>
				<div class="clearfix"></div>

			</div> <!-- End of header-->
			<!--
			<div id="nav">
				<ul>
					<li><a href="#">Home</a></li>
					<li><a href="#">About Us</a></li>
					<li><a href="#">Contact Us</a></li>
				</ul>

			</div>
			-->
			<div id="access">
				<div id="loggin"><form method="post">
					Username or Matricnumber: <input type="text" placeholder="Username/Matric No" name="loginid">
					Password: <input type="password" placeholder="Password" name="loginpassword">
					<input type="submit" value="Login" name="login"></form>
				</div>
			</div>


			<div id="slider">
        
            		<!--    <img src="images/slider.jpg" alt="slider" title="slider"/> -->
            
            		<!-- Elastic Slider-->
	                <div id="ei-slider" class="ei-slider">
	                    <ul class="ei-slider-large">
	                        <li>
	                            <img src="images/nacoss.jpg" />
	                            <div class="ei-title">
	                                <h2>Faculty Of Tech</h2>
	                                <h3></h3>
	                            </div>
	                        </li>
	                        <li>
	                            <img src="images/p1.jpg"/>
	                            <div class="ei-title">
	                                <h2>The Museum</h2>
	                                <h3></h3>
	                            </div>
	                        </li>
	                        <li>
	                            <img src="images/library.jpg"/>
	                            <div class="ei-title">
	                                <h2>School Library</h2>
	                                <h3></h3>
	                            </div>
	                        </li>
	                        <li>
	                            <img src="images/hos1.jpg"/>
	                            <div class="ei-title">
	                                <h2>Tranquilent</h2>
	                                
	                            </div>
	                        </li>
	                        <li>
	                            <img src="images/senate.jpg"/>
	                            <div class="ei-title">
	                                <h2>Senate Building</h2>
	                                
	                            </div>
	                        </li>
	                        <li>
	                            <img src="images/skool.jpg"/>
	                            <div class="ei-title">
	                                <h2></h2>
	                                <h3></h3>
	                            </div>
	                        </li>
	                        <li>
	                            <img src="images/entrance.jpg"/>
	                            <div class="ei-title">
	                                <h2>Entrance</h2>
	                                
	                            </div>
	                        </li>
	                    </ul><!-- ei-slider-large -->
	                    <ul class="ei-slider-thumbs">
	                        <li class="ei-slider-element">Current</li>
	                        <li><a href="#">Slide 6</a><img src="images/thumbs/nacoss.jpg" alt="thumb06" /></li>
	                        <li><a href="#">Slide 1</a><img src="images/thumbs/p1.jpg" alt="thumb01" /></li>
	                        <li><a href="#">Slide 2</a><img src="images/thumbs/library.jpg" alt="thumb02" /></li>
	                        <li><a href="#">Slide 3</a><img src="images/thumbs/hos1.jpg" alt="thumb03" /></li>
	                        <li><a href="#">Slide 4</a><img src="images/thumbs/senate.jpg" alt="thumb04" /></li>
	                        <li><a href="#">Slide 5</a><img src="images/thumbs/skool.jpg" alt="thumb05" /></li>
	                        <li><a href="#">Slide 7</a><img src="images/thumbs/entrance.jpg" alt="thumb07" /></li>
	                    </ul><!-- ei-slider-thumbs -->
	                </div><!-- ei-slider -->
            
            	</div><!-- End Of Slider-->


            	<div>
            	<div id="eis_home">
                	<div id="eih_left">
                        <div style="font-size:xx-large; color:#036; margin:10px 0px;">&nbsp Student Assistance System</div>
                        This is an automated system that help students to get relevant e-books and past questions , identify courses taken in every semester and locate offices within the department with ease.<br /><br />
                        <div style="overflow:auto; border-top:1px solid #eee;">
                        	<div style="float:left; width:310px; height:260px;">
                            	<div style="padding:10px;">
                                    <div style="font-size:xx-large; color:#036; margin-bottom:10px;">Download Materials</div>
                                    <img alt="" src="images/registration.jpg" style="width:100%; height:145px;" /><br /><br />
                                    Text books and past question can be found and downloaded on the system
                                </div>
                            </div>
                            <div style="float:left; width:550px; border-left:1px solid #eee; height:260px;">
                            	<div style="padding:10px;">
                                	<div id="login">
										<form method="post"><fieldset>
                                			<legend>CREATE AN ACCOUNT</legend>
                                			First Name: <input type="text" name="firstname" placeholder="First Name" id="fname" required="required"><br/>
                                			<br/>Last Name:<input type="text" name="lastname" placeholder="Last Name" id="lname" required="required"><br>
                                			<br/>Matric No: <input type="text" name="matricnumber" placeholder="Matric No" id="matno" required="required"><br/>
                                			<br/>Username: <input type="text" name="username" placeholder="UserName" id="uname" required="required"><br/>
											<br/>E-mail: <input type="email" name="email" placeholder="E-mail" id="email" required="required"><br/>
											<br/>phone No: <input type="text" name="phonenumber" placeholder="Phone Number" id="phonenumber" required="required"><br/>
                                			<br/>Password: <input type="password" name="password" id="pword" placeholder="Password" required="required" autocomplete="off"><br/>
                                			<br/>Verify Password: <input type="password" name="verifypassword" placeholder="Verify Password" id="vpword" required="required" autocomplete="off"><br>
                                			<br/>Date Of Birth: <input type="date" name="dob" id="dob"><br/>
                                			 <br/>Option:<select id="option name="option">
											 <option value="Computer Science With mathematics">Mathematics</option>
                                			 	<option value="Computer Science With Economics">Economics</option>
                                			 	<option value="Computer Engineering">Engineering</option>
                                			 </select><br />
                                			 <br>Level:<select id="level" name="level"></br>
                                			 	<option value="100L">100L</option>
                                			 	<option value="200L">200L</option>
                                			 	<option value="300L">300L</option>
                                			 	<option value="400L">400L</option>
                                			 	<option value="500L">500L</option>
												<option value="graduate">Graduate</option>
                                			 </select><br />
                                			 Gender: Male<input type="radio" checked name="gender" class="gender" value="male"> Female<input type="radio" name="gender" value="female">
                                			 <br><input type="submit" value="Register!" id="reg" name="signup">
                                		</fieldset></form>

            						</div>
                                </div>
                            </div>
                        </div>
                    </div> 
                    <div id="eih_right">
                    
                    </div>
                </div>
            </div>
			
			
            

			<div id="eis_footer">
				&copy;2016 - <b>Computer Science & Engineering Student Assistance System</b>
			</div>

		</div> <!-- End of pageWrapper-->



		<!-- Elastic Slider-->
        <script src="js/jquery-min.js"></script>    
        <script type="text/javascript" src="js/jquery.eislideshow.js"></script>
        <script type="text/javascript" src="js/jquery.easing.1.3.js"></script>
        <script type="text/javascript">
            $(function() {
                $('#ei-slider').eislideshow({
                    animation           : 'center',
                    autoplay            : true,
                    slideshow_interval  : 3000,
                    titlesFactor        : 0
                });
            });
        </script>
        
        <!-- Responsive navigation-->
        <script type="text/javascript" src="js/selectnav.min.js"></script>
        <script type="text/javascript">
            selectnav('nav', {
              label: '-Navigation-',
              nested: true,
              indent: '-'
            });
        </script>
	</body>
</html>

<?php
if(isset($_POST['signup'])) {
		$firstname = test_input($_POST["firstname"]);
		$lastname = test_input($_POST["lastname"]);
		$matricnumber = test_input($_POST["matricnumber"]);
		$username = test_input($_POST["username"]);
		$email = test_input($_POST["email"]);
		$phonenumber = test_input($_POST["phonenumber"]);
		$level = test_input($_POST["level"]);
		$option = test_input($_POST["option"]);
	    $gender= test_input($_POST["gender"]);
		$dob = test_input($_POST["dob"]);
		$password=$_POST["password"];
		$verifypassword=$_POST["verifypassword"];
		if($password!=$verifypassword)
		echo  "<script>alert('varefy password does not match password, account not created pls refill the form');</script>";
				else{
						 $password=htmlspecialchars($password);
					 //connect to data base
					 $dbhost = "localhost";
					 $dbuser = "root";
					 $dbpass = "";
					 $dbname = "cscSAS";
					 
					 $conn = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname) or die("Cannot Connect to the Mysql Database. Please try again later!");
					 
					 if($conn){
							$sql="SELECT * FROM cscstudents WHERE username='$username'";
								$result = mysqli_query($conn, $sql)or die("Can not select from table 1");
							 if(mysqli_num_rows($result)>0){ 
												echo "<script>alert('username already exist, account not created');</script>";
												mysqli_close($conn);//close the connection
												}
											else{
													$sql="SELECT * FROM cscstudents WHERE matricnumber='$matricnumber'"; 
													$result= mysqli_query($conn,$sql) or die("Can not select from table 2");
													if(mysqli_num_rows($result)>0) {
													echo "<script>alert('matric number already exist, account not created');</script>";
													mysqli_close($conn);//close the connection
													}
													 else{
													 // all verification cleared, do the insert.
													 $sql="INSERT INTO `cscstudents` (`firstname`, `lastname`, `username`, `matricnumber`, `email`, `phonenumber`, `level`, `option`, `gender`, `dob`, `password`) VALUES ('$firstname', '$lastname', '$username', '$matricnumber', '$email', '$phonenumber', '$level', '$option', '$gender', '$dob', '$password')";
													 mysqli_query($conn,$sql) or  die("table was not inserted". mysqli_error($conn));
													 mysqli_close($conn);//close the connection
													 echo "<script>alert('Account sussefully created, u can now login');</script>";
													 
													 }
									 }
					 }
														}
		
}
function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>
<?php
 if(isset($_POST['login'])){
 $loginid = test_logininput($_POST["loginid"]);
 $password = test_logininput($_POST["loginpassword"]);
 if($loginid=='admin'&&$password=='admin'){
														session_name('admin');
														session_start();
														$_SESSION['user']="admin";
											header('Location:admin.php');
		
		}
		else{
					$dbhost = "localhost";
					 $dbuser = "root";
					 $dbpass = "";
					 $dbname = "cscSAS";
					 $conn = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname) or die("Cannot Connect to the Mysql Database. Please try again later!");
					 if($conn){
					 $sql="SELECT * FROM cscstudents WHERE username='$loginid'and password='$password'";
					 $result = mysqli_query($conn, $sql)or die("Can not select from table 1");
							 if(mysqli_num_rows($result)<1){
							 $sql="SELECT * FROM cscstudents WHERE matricnumber='$loginid' and password='$password'";
							 $result = mysqli_query($conn, $sql)or die("Can not select from table 1");
							 }
							  if(mysqli_num_rows($result)<1){
										 echo "<script>alert('wrong user name , matric number or password pls try again');</script>";
										 mysqli_close($conn);//close the connection
										}
											else{
											$row =  mysqli_fetch_assoc($result);
											// since the user was found, now we create a session
														session_name('user');
														session_start();
														$_SESSION=$row;
											header('Location:profile.php');
											}
					 }
 }
 
 }
 function test_logininput($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
 ?>
