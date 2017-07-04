<?php
session_name('user');
session_start();
if(isset($_SESSION['matricnumber'])==false)
header('Location:index.php');
?>
<html>
	<head>
		<title>Part One</title>
		<link rel="stylesheet" type="text/css" href="styles/myStyle.css">
	</head>
	<body>
		<div id="wrapper">
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
						<li><a href="pastQuestion.php">Past Questions |</span></a></li>
						<li><a href="office.php">Locate Office |</a></li>
						<li><a href="Courses.php"><span style="background-color: black; padding: 4px;">Courses |</span></a></li>
						<li><a href="logout.php">Log Out</a></li>
					</ul>
				</div>
			</div>
			<div id="link">
				<ul>
					<li><a href="#ce">Part 1 Engineering</a></li>
					<li><a href="#csm">Part 1 Mathematics</a></li>
					<li><a href="#cse">Part 1 Economics</a></li>
				</ul>

				<ul id="link2">
					<li><a href="#ce2">Part 2 Engineering</a></li>
					<li><a href="#csm2">Part 2 Mathematics</a></li>
					<li><a href="#cse2">Part 2 Economics</a></li>
				</ul>
				<ul id="link3">
					<li><a href="#ce2">Part 3 Engineering</a></li>
					<li><a href="#csm2">Part 3 Mathematics</a></li>
					<li><a href="#cse2">Part 3 Economics</a></li>
				</ul>
				<ul id="link4">
					<li><a href="#ce2">Part 4 Engineering</a></li>
					<li><a href="#csm2">Part 4 Mathematics</a></li>
					<li><a href="#cse2">Part 4 Economics</a></li>
				</ul>
				<ul id="link5">
					<li><a href="#ce2">Part 5 Engineering</a></li>
					<li><a href="#csm2">Part 5 Mathematics</a></li>
					<li><a href="#cse2">Part 5 Economics</a></li>
				</ul>
			</div>
		<h3 class="staff">Part I: Harmattan Semester</h3>
			<table>
				<thead>
					<tr>
						<th class="patrOneth">Grouping</th>
						<th class="patrOneth">Course Code</th>
						<th class="patrOneth">Course Title</th>
						<th class="patrOneth">Prerequisites, Corequisites</th>
						<th class="patrOneth">L-T-P</th>
						<th class="patrOneth">Units</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td class="partOneth left">(a)Core Compulsory Courses</td>
						<td class="patrOneth">MTH 101</td>
						<td class="patrOneth">Elementary Mathematics I</td>
						<td class="patrOneth"></td>
						<td class="patrOneth">4-1-0</td>
						<td class="patrOneth">5</td>
					</tr>
					<tr>
						<td class="left"></td>
						<td class="patrOneth">CHM 101</td>
						<td class="patrOneth">Introductory Chemistry I</td>
						<td class="patrOneth"></td>
						<td class="patrOneth">3-0-0</td>
						<td class="patrOneth">3</td>
					</tr>
					<tr>
						<td class="left"></td>
						<td class="patrOneth">PHY 101</td>
						<td class="patrOneth">General Physic I</td>
						<td class="patrOneth"></td>
						<td class="patrOneth">3-0-0</td>
						<td class="patrOneth">3</td>
					</tr>
					<tr>
						<td class="left"></td>
						<td class="patrOneth">PHY 107</td>
						<td class="patrOneth">Experimental Physic IA</td>
						<td class="patrOneth"></td>
						<td class="patrOneth">0-0-3</td>
						<td class="patrOneth">1</td>
					</tr>
					<tr>
						<td class="left"></td>
						<td class="patrOneth">CHM 101</td>
						<td class="patrOneth">Elementary Mathematics I</td>
						<td class="patrOneth"></td>
						<td class="patrOneth">3-0-0</td>
						<td class="patrOneth">3</td>
					</tr>
					<tr>
						<td class="left"></td>
						<td class="patrOneth">CSC 101</td>
						<td class="patrOneth">Introduction to computing I</td>
						<td class="patrOneth"></td>
						<td class="patrOneth">2-0-0</td>
						<td class="patrOneth">2</td>
					</tr>
					<tr>
						<td class="general left">(b) General Studies</td>
						<td class="patrOneth">TPD 101</td>
						<td class="patrOneth">Engineering in Society</td>
						<td class="patrOneth"></td>
						<td class="patrOneth">1-0-0</td>
						<td class="patrOneth">1</td>
					</tr>
					<tr>
						<td class="left"></td>
						<td class="patrOneth">SE</td>
						<td class="patrOneth">Special Elective</td>
						<td class="patrOneth"></td>
						<td class="patrOneth">2-0-0</td>
						<td class="patrOneth">2</td>
					</tr>
					<tr>
						<td class="left"></td>
						<td class="patrOneth">SE</td>
						<td class="patrOneth">Special Elective</td>
						<td class="patrOneth"></td>
						<td class="patrOneth">2-0-0</td>
						<td class="patrOneth">2</td>
					</tr>
					<tr>
						<td class="patrOneth"></td>
						<td class="patrOneth"></td>
						<td class="patrOneth"></td>
						<td class="patrOneth"></td>
						<td class="patrOneth">17-2-6</td>
						<td class="patrOneth">21</td>
					</tr>
				</tbody>
			</table>
		</div>


		<div id="wrapper">
		<h3 class="staff">Part I: Rain Semester</h3>
			<table>
				<thead>
					<tr>
						<th class="patrOneth">Grouping</th>
						<th class="patrOneth">Course Code</th>
						<th class="patrOneth">Course Title</th>
						<th class="patrOneth">Prerequisites, Corequisites</th>
						<th class="patrOneth">L-T-P</th>
						<th class="patrOneth">Units</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td class="partOneth left">(a)Core Compulsory Courses</td>
						<td class="patrOneth">MTH 102</td>
						<td class="patrOneth">Elementary Mathematics II</td>
						<td class="patrOneth"></td>
						<td class="patrOneth">4-1-0</td>
						<td class="patrOneth">5</td>
					</tr>
					<tr>
						<td class="left"></td>
						<td class="patrOneth">MTH 104</td>
						<td class="patrOneth">Vectors</td>
						<td class="patrOneth"></td>
						<td class="patrOneth">2-0-0</td>
						<td class="patrOneth">2</td>
					</tr>
					<tr>
						<td class="left"></td>
						<td class="patrOneth">PHY 102</td>
						<td class="patrOneth">General Physics II</td>
						<td class="patrOneth"></td>
						<td class="patrOneth">3-0-0</td>
						<td class="patrOneth">3</td>
					</tr>
					<tr>
						<td class="left"></td>
						<td class="patrOneth">PHY 108</td>
						<td class="patrOneth">Experimental Physics IB</td>
						<td class="patrOneth"></td>
						<td class="patrOneth">0-0-3</td>
						<td class="patrOneth">1</td>
					</tr>
					<tr>
						<td class="left"></td>
						<td class="patrOneth">CHM 102</td>
						<td class="patrOneth">Introductory Chemistry II</td>
						<td class="patrOneth"></td>
						<td class="patrOneth">3-1-0</td>
						<td class="patrOneth">4</td>
					</tr>
					<tr>
						<td class="left"></td>
						<td class="patrOneth">CSC 102</td>
						<td class="patrOneth">Introduction to computing II</td>
						<td class="patrOneth"></td>
						<td class="patrOneth">2-0-0</td>
						<td class="patrOneth">2</td>
					</tr>
					<tr>
						<td class="general left">(b) General Studies</td>
						<td class="patrOneth"></td>
						<td class="patrOneth"></td>
						<td class="patrOneth"></td>
						<td class="patrOneth"></td>
						<td class="patrOneth"></td>
					</tr>
					<tr>
						<td class="left"></td>
						<td class="patrOneth">SE</td>
						<td class="patrOneth">Special Elective</td>
						<td class="patrOneth"></td>
						<td class="patrOneth">2-0-0</td>
						<td class="patrOneth">2</td>
					</tr>
					<tr>
						<td class="left"></td>
						<td class="patrOneth">SE</td>
						<td class="patrOneth">Special Elective</td>
						<td class="patrOneth"></td>
						<td class="patrOneth">2-0-0</td>
						<td class="patrOneth">2</td>
					</tr>
					<tr>
						<td class="patrOneth"></td>
						<td class="patrOneth"></td>
						<td class="patrOneth"></td>
						<td class="patrOneth"></td>
						<td class="patrOneth">17-2-6</td>
						<td class="patrOneth">21</td>
					</tr>
				</tbody>
			</table>

		</div>

		<div id="wrapper">
		<h3 class="staff">Part II: Harmattan Semester</h3>
			<table>
				<thead>
					<tr>
						<th class="patrOneth">Grouping</th>
						<th class="patrOneth">Course Code</th>
						<th class="patrOneth">Course Title</th>
						<th class="patrOneth">Prerequisites, Corequisites</th>
						<th class="patrOneth">L-T-P</th>
						<th class="patrOneth">Units</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td class="partOneth left">(a)Core Compulsory Courses</td>
						<td class="patrOneth"CSC 201</td>
						<td class="patrOneth">Computer Programming I</td>
						<td class="patrOneth"></td>
						<td class="patrOneth">2-0-3</td>
						<td class="patrOneth">3</td>
					</tr>
					<tr>
						<td class="left"></td>
						<td class="patrOneth">CPE 203</td>
						<td class="patrOneth">Introduction to Digital Computer System I I</td>
						<td class="patrOneth"></td>
						<td class="patrOneth">2-0-0</td>
						<td class="patrOneth">2</td>
					</tr>
					<tr>
						<td class="left"></td>
						<td class="patrOneth">MTH 201</td>
						<td class="patrOneth">Mathematical Method I</td>
						<td class="patrOneth">MTH 102</td>
						<td class="patrOneth">3-1-0</td>
						<td class="patrOneth">4</td>
					</tr>
					<tr>
						<td class="left"></td>
						<td class="patrOneth">MEE 203</td>
						<td class="patrOneth">Engineering Drawing I</td>
						<td class="patrOneth"></td>
						<td class="patrOneth">1-0-3</td>
						<td class="patrOneth">2</td>
					</tr>
					<tr>
						<td class="left"></td>
						<td class="patrOneth">MEE 205</td>
						<td class="patrOneth">Engineering Mechanics I</td>
						<td class="patrOneth"></td>
						<td class="patrOneth">2-1-0</td>
						<td class="patrOneth">3</td>
					</tr>
					<tr>
						<td class="left"></td>
						<td class="patrOneth">CHE 201</td>
						<td class="patrOneth">Intro to Thermodynamics</td>
						<td class="patrOneth"></td>
						<td class="patrOneth">0-0-3</td>
						<td class="patrOneth">1</td>
					</tr>
					<tr>
						<td class="left"></td>
						<td class="patrOneth">EEE 201</td>
						<td class="patrOneth">Applied Electricity I</td>
						<td class="patrOneth">Phy 102</td>
						<td class="patrOneth">2-0-0</td>
						<td class="patrOneth">2</td>
					</tr>
					<tr>
						<td class="left"></td>
						<td class="patrOneth">EE 291</td>
						<td class="patrOneth">Apllied Electricity Lab. I</td>
						<td class="patrOneth"></td>
						<td class="patrOneth">2-1-0</td>
						<td class="patrOneth">3</td>
					</tr>

					<tr>
						<td class="general left">(b) General Studies</td>
						<td class="patrOneth">SE</td>
						<td class="patrOneth">Special Elective</td>
						<td class="patrOneth"></td>
						<td class="patrOneth">2-0-0</td>
						<td class="patrOneth">2</td>
					</tr>
					<tr>
						<td class="patrOneth"></td>
						<td class="patrOneth"></td>
						<td class="patrOneth"></td>
						<td class="patrOneth"></td>
						<td class="patrOneth">16-3-9</td>
						<td class="patrOneth">22</td>
					</tr>
				</tbody>
			</table>
		</div>


		<div id="wrapper">
		<h3 class="staff">B.Sc (HONS) COMPUTER ENGINEERING</h3>
		<h3 class="staff">Part II: Rain Semester <span id="top"><a href="">Goto Top</a></span></h3>
			<table>
				<thead>
					<tr>
						<th class="patrOneth">Grouping</th>
						<th class="patrOneth">Course Code</th>
						<th class="patrOneth">Course Title</th>
						<th class="patrOneth">Prerequisites, Corequisites</th>
						<th class="patrOneth">L-T-P</th>
						<th class="patrOneth">Units</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td class="partOneth left">(a)Core Compulsory Courses</td>
						<td class="patrOneth">CSC 202</td>
						<td class="patrOneth">Computer Programming II</td>
						<td class="patrOneth">CSC 201</td>
						<td class="patrOneth">1-0-3</td>
						<td class="patrOneth">2</td>
					</tr>
					<tr>
						<td class="left"></td>
						<td class="patrOneth">CPE 204</td>
						<td class="patrOneth">Introduction to Digital Computer System II</td>
						<td class="patrOneth">CPE 203</td>
						<td class="patrOneth">2-0-0</td>
						<td class="patrOneth">2</td>
					</tr>
					<tr>
						<td class="left"></td>
						<td class="patrOneth">MTH 202</td>
						<td class="patrOneth">Mathematecal Method II</td>
						<td class="patrOneth">MTH 201</td>
						<td class="patrOneth">3-1-0</td>
						<td class="patrOneth">4</td>
					</tr>
					<tr>
						<td class="left"></td>
						<td class="patrOneth">MEE 204</td>
						<td class="patrOneth">Engineering Drawing II</td>
						<td class="patrOneth">MEE 203</td>
						<td class="patrOneth">1-0-3</td>
						<td class="patrOneth">2</td>
					</tr>
					<tr>
						<td class="left"></td>
						<td class="patrOneth">MEE 206</td>
						<td class="patrOneth">Engineering Mechanics II</td>
						<td class="patrOneth">MEE 205</td>
						<td class="patrOneth">2-0-0</td>
						<td class="patrOneth">2</td>
					</tr>
					<tr>
						<td class="left"></td>
						<td class="patrOneth">Age 202</td>
						<td class="patrOneth">Workshop Practice</td>
						<td class="patrOneth"></td>
						<td class="patrOneth">1-0-3</td>
						<td class="patrOneth">2</td>
					</tr>
					<tr>
						<td class="left"></td>
						<td class="patrOneth">CVE 202</td>
						<td class="patrOneth">Strenght Materials</td>
						<td class="patrOneth">MEE 205</td>
						<td class="patrOneth">2-0-3</td>
						<td class="patrOneth">3</td>
					</tr>
					<tr>
						<td class="left"></td>
						<td class="patrOneth">EEE 202</td>
						<td class="patrOneth">Applied Electricity</td>
						<td class="patrOneth">EEE 201</td>
						<td class="patrOneth">0-0-3</td>
						<td class="patrOneth">1</td>
					</tr>
					<tr>
						<td class="general left">(b) General Studies</td>
						<td class="patrOneth">SE</td>
						<td class="patrOneth">Special Elective</td>
						<td class="patrOneth"></td>
						<td class="patrOneth">2-0-0</td>
						<td class="patrOneth">2</td>
					</tr>
					<tr>
						<td class="patrOneth"></td>
						<td class="patrOneth"></td>
						<td class="patrOneth"></td>
						<td class="patrOneth"></td>
						<td class="patrOneth">16-2-12</td>
						<td class="patrOneth">22</td>
					</tr>
				</tbody>
			</table>
		</div>

		<div id="wrapper">
		<h3 class="staff">LONG VACATION</h3>
		<table>
				<thead>
					<tr>
						<th class="patrOneth">Grouping</th>
						<th class="patrOneth">Course Code</th>
						<th class="patrOneth">Course Title</th>
						<th class="patrOneth">Prerequisites, Corequisites</th>
						<th class="patrOneth">L-T-P</th>
						<th class="patrOneth">Units</th>
					</tr>
				</thead>

				<tbody>
					<tr>
						<td class="left"></td>
						<td class="patrOneth">CPE 200</td>
						<td class="patrOneth">Student Industrial Work Experience I</td>
						<td class="patrOneth"></td>
						<td class="patrOneth">0-0-9</td>
						<td class="patrOneth">3</td>
					</tr>
				</tbody>
			</table>
		</div>

		<div id="wrapper">
		<h3 class="staff">B.Sc Computer Science With Economics</h3>
		<h3 class="staff">Part II: Harmattan Semester</h3>
			<table>
				<thead>
					<tr>
						<th class="patrOneth">Grouping</th>
						<th class="patrOneth">Course Code</th>
						<th class="patrOneth">Course Title</th>
						<th class="patrOneth">Prerequisites, Corequisites</th>
						<th class="patrOneth">L-T-P</th>
						<th class="patrOneth">Units</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td class="partOneth left">(a)Core Compulsory Courses</td>
						<td class="patrOneth"CSC 201</td>
						<td class="patrOneth">Computer Programming I</td>
						<td class="patrOneth"></td>
						<td class="patrOneth">2-0-3</td>
						<td class="patrOneth">3</td>
					</tr>
					<tr>
						<td class="left"></td>
						<td class="patrOneth">CPE 203</td>
						<td class="patrOneth">Introduction to Digital Computer System I</td>
						<td class="patrOneth"></td>
						<td class="patrOneth">2-0-0</td>
						<td class="patrOneth">2</td>
					</tr>
					<tr>
						<td class="left"></td>
						<td class="patrOneth">ECN 201</td>
						<td class="patrOneth">Principle of Economics</td>
						<td class="patrOneth"></td>
						<td class="patrOneth">2-1-0</td>
						<td class="patrOneth">3</td>
					</tr>
					<tr>
						<td class="left"></td>
						<td class="patrOneth">ECN 203</td>
						<td class="patrOneth">Intro. to Applied Economics I</td>
						<td class="patrOneth"></td>
						<td class="patrOneth">2-1-0</td>
						<td class="patrOneth">3</td>
					</tr>
					<tr>
						<td class="left"></td>
						<td class="patrOneth">MEE 205</td>
						<td class="patrOneth">Engineering Mechanics I</td>
						<td class="patrOneth"></td>
						<td class="patrOneth">2-1-0</td>
						<td class="patrOneth">3</td>
					</tr>
					<tr>
						<td class="left"></td>
						<td class="patrOneth">MTH 201</td>
						<td class="patrOneth">Mathematic Method I</td>
						<td class="patrOneth">MTH 102</td>
						<td class="patrOneth">2-1-0</td>
						<td class="patrOneth">4</td>
					</tr>
					<tr>
						<td class="left"></td>
						<td class="patrOneth">MEE 203</td>
						<td class="patrOneth">Engineering Drawing</td>
						<td class="patrOneth">Phy 102</td>
						<td class="patrOneth">1-0-3</td>
						<td class="patrOneth">2</td>
					</tr>
					<tr>
						<td class="general left">(b) General Studies</td>
						<td class="patrOneth">SE</td>
						<td class="patrOneth">Special Elective</td>
						<td class="patrOneth"></td>
						<td class="patrOneth">2-0-0</td>
						<td class="patrOneth">2</td>
					</tr>
					<tr>
						<td class="patrOneth"></td>
						<td class="patrOneth"></td>
						<td class="patrOneth"></td>
						<td class="patrOneth"></td>
						<td class="patrOneth">14-3-6</td>
						<td class="patrOneth">19</td>
					</tr>
				</tbody>
			</table>
		</div>


		<div id="wrapper">
		<h3 class="staff">B.Sc (HONS) COMPUTER SCIENCE WITH ECONOMICS</h3>
		<h3 class="staff">Part II: Rain Semester</h3>
			<table>
				<thead>
					<tr>
						<th class="patrOneth">Grouping</th>
						<th class="patrOneth">Course Code</th>
						<th class="patrOneth">Course Title</th>
						<th class="patrOneth">Prerequisites, Corequisites</th>
						<th class="patrOneth">L-T-P</th>
						<th class="patrOneth">Units</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td class="partOneth left">(a)Core Compulsory Courses</td>
						<td class="patrOneth">CSC 202</td>
						<td class="patrOneth">Computer Programming II</td>
						<td class="patrOneth">CSC 201</td>
						<td class="patrOneth">1-0-3</td>
						<td class="patrOneth">2</td>
					</tr>
					<tr>
						<td class="left"></td>
						<td class="patrOneth">CPE 204</td>
						<td class="patrOneth">Introduction to Digital Computer System II</td>
						<td class="patrOneth">CPE 203</td>
						<td class="patrOneth">2-0-0</td>
						<td class="patrOneth">2</td>
					</tr>
					<tr>
						<td class="left"></td>
						<td class="patrOneth">MTH 202</td>
						<td class="patrOneth">Mathematecal Method II</td>
						<td class="patrOneth">MTH 201</td>
						<td class="patrOneth">3-1-0</td>
						<td class="patrOneth">4</td>
					</tr>
					<tr>
						<td class="left"></td>
						<td class="patrOneth">ECN 202</td>
						<td class="patrOneth">Principle of Economics II</td>
						<td class="patrOneth">ECN 201</td>
						<td class="patrOneth">1-0-3</td>
						<td class="patrOneth">2</td>
					</tr>
					<tr>
						<td class="left"></td>
						<td class="patrOneth">ECN 204</td>
						<td class="patrOneth">Engineering Mechanics II</td>
						<td class="patrOneth">ECN 203</td>
						<td class="patrOneth">2-0-0</td>
						<td class="patrOneth">2</td>
					</tr>
					<tr>
						<td class="left"></td>
						<td class="patrOneth">MEE 204</td>
						<td class="patrOneth">Engineering Drawing II</td>
						<td class="patrOneth"></td>
						<td class="patrOneth">1-0-3</td>
						<td class="patrOneth">2</td>
					</tr>
					<tr>
						<td class="general left">(b) General Studies</td>
						<td class="patrOneth">SE</td>
						<td class="patrOneth">Special Elective</td>
						<td class="patrOneth"></td>
						<td class="patrOneth">2-0-0</td>
						<td class="patrOneth">2</td>
					</tr>
					<tr>
						<td class="patrOneth"></td>
						<td class="patrOneth"></td>
						<td class="patrOneth"></td>
						<td class="patrOneth"></td>
						<td class="patrOneth">13-3-1</td>
						<td class="patrOneth">15-3-6</td>
					</tr>
				</tbody>
			</table>
		</div>

		<div id="wrapper">
		<h3 class="staff">LONG VACATION</h3>
		<table>
				<thead>
					<tr>
						<th class="patrOneth">Grouping</th>
						<th class="patrOneth">Course Code</th>
						<th class="patrOneth">Course Title</th>
						<th class="patrOneth">Prerequisites, Corequisites</th>
						<th class="patrOneth">L-T-P</th>
						<th class="patrOneth">Units</th>
					</tr>
				</thead>

				<tbody>
					<tr>
						<td class="left"></td>
						<td class="patrOneth">CSC 200</td>
						<td class="patrOneth">Student Industrial Work Experience I</td>
						<td class="patrOneth"></td>
						<td class="patrOneth">0-0-9</td>
						<td class="patrOneth">3</td>
					</tr>
				</tbody>
			</table>
		</div>

		<div id="wrapper">
			<h3 class ="staff">B.Sc (HONS) Computer Science With Mathematics</h3>
		<h3 class="staff">Part II: Harmattan Semester</h3>
			<table>
				<thead>
					<tr>
						<th class="patrOneth">Grouping</th>
						<th class="patrOneth">Course Code</th>
						<th class="patrOneth">Course Title</th>
						<th class="patrOneth">Prerequisites, Corequisites</th>
						<th class="patrOneth">L-T-P</th>
						<th class="patrOneth">Units</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td class="partOneth left">(a)Core Compulsory Courses</td>
						<td class="patrOneth">CSC 201</td>
						<td class="patrOneth">Computer Programming I</td>
						<td class="patrOneth"></td>
						<td class="patrOneth">2-0-3</td>
						<td class="patrOneth">3</td>
					</tr>
					<tr>
						<td class="left"></td>
						<td class="patrOneth">CPE 203</td>
						<td class="patrOneth">Intro. to Digital Computer System I I</td>
						<td class="patrOneth"></td>
						<td class="patrOneth">2-0-0</td>
						<td class="patrOneth">2</td>
					</tr>
					<tr>
						<td class="left"></td>
						<td class="patrOneth">MTH 201</td>
						<td class="patrOneth">Mathematical Method I I</td>
						<td class="patrOneth">MTRH 102</td>
						<td class="patrOneth">3-1-0</td>
						<td class="patrOneth">4</td>
					</tr>
					<tr>
						<td class="left"></td>
						<td class="patrOneth">MTH 205</td>
						<td class="patrOneth">Intro. to Algebra I</td>
						<td class="patrOneth"></td>
						<td class="patrOneth">2-1-0</td>
						<td class="patrOneth">3</td>
					</tr>
					<tr>
						<td class="left"></td>
						<td class="patrOneth">STT 201</td>
						<td class="patrOneth">Intro. to Statistic I</td>
						<td class="patrOneth"></td>
						<td class="patrOneth">2-1-0</td>
						<td class="patrOneth">3</td>
					</tr>
					<tr>
						<td class="left"></td>
						<td class="patrOneth">MEE 203</td>
						<td class="patrOneth"></td>
						<td class="patrOneth"></td>
						<td class="patrOneth">1-0-3</td>
						<td class="patrOneth">2</td>
					</tr>
					<tr>
						<td class="general left">(b) General Studies</td>
						<td class="patrOneth">TPD 101</td>
						<td class="patrOneth">Special Elective</td>
						<td class="patrOneth"></td>
						<td class="patrOneth">2-0-0</td>
						<td class="patrOneth">2</td>
					</tr>
								
				</tbody>
			</table>
		</div>


		<div id="wrapper">

		<h3 class="staff">Part II: Rain Semester</h3>
			<table>
				<thead>
					<tr>
						<th class="patrOneth">Grouping</th>
						<th class="patrOneth">Course Code</th>
						<th class="patrOneth">Course Title</th>
						<th class="patrOneth">Prerequisites, Corequisites</th>
						<th class="patrOneth">L-T-P</th>
						<th class="patrOneth">Units</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td class="partOneth left">(a)Core Compulsory Courses</td>
						<td class="patrOneth">CSC 202</td>
						<td class="patrOneth">Computer Programming II</td>
						<td class="patrOneth">CSC 201</td>
						<td class="patrOneth">1-0-3</td>
						<td class="patrOneth">2</td>
					</tr>
					<tr>
						<td class="left"></td>
						<td class="patrOneth">CPE 204</td>
						<td class="patrOneth">Intro. to Digital System II</td>
						<td class="patrOneth">CPE 203</td>
						<td class="patrOneth">3-0-0</td>
						<td class="patrOneth">3</td>
					</tr>
					<tr>
						<td class="left"></td>
						<td class="patrOneth">PHY 101</td>
						<td class="patrOneth">Elementary Mathematics I</td>
						<td class="patrOneth"></td>
						<td class="patrOneth">2-0-0</td>
						<td class="patrOneth">2</td>
					</tr>
					<tr>
						<td class="left"></td>
						<td class="patrOneth">CPE 206</td>
						<td class="patrOneth">Digital Laboratory I</td>
						<td class="patrOneth"></td>
						<td class="patrOneth">1-0-3</td>
						<td class="patrOneth">2</td>
					</tr>
					<tr>
						<td class="left"></td>
						<td class="patrOneth">MTH 202</td>
						<td class="patrOneth">Mathematical Method II</td>
						<td class="patrOneth">MTH 201</td>
						<td class="patrOneth">3-1-0</td>
						<td class="patrOneth">4</td>
					</tr>
					<tr>
						<td class="left"></td>
						<td class="patrOneth">MTH 306</td>
						<td class="patrOneth">Groups and Rings</td>
						<td class="patrOneth"></td>
						<td class="patrOneth">2-1-0</td>
						<td class="patrOneth">3</td>
					</tr>

<tr>
						<td class="left"></td>
						<td class="patrOneth">STT 202</td>
						<td class="patrOneth"> Proberbility Distribution I</td>
						<td class="patrOneth"></td>
						<td class="patrOneth">3-1-0</td>
						<td class="patrOneth">4</td>
					</tr>
					<tr>
						<td class="left"></td>
						<td class="patrOneth">MEE 204</td>
						<td class="patrOneth">Engineering Darwing II</td>
						<td class="patrOneth"></td>
						<td class="patrOneth">1-0-3</td>
						<td class="patrOneth">2</td>
					</tr>
					<tr>
						<td class="left"></td>
						<td class="patrOneth">SE</td>
						<td class="patrOneth">Special Elective</td>
						<td class="patrOneth"></td>
						<td class="patrOneth">2-0-0</td>
						<td class="patrOneth">2</td>
					</tr>
				</tbody>
			</table>
		</div>
		<div id="wrapper">

		<h3 class="staff">LONG VACATION</h3>
			<table>
				<thead>
					<tr>
						<th class="patrOneth">Grouping</th>
						<th class="patrOneth">Course Code</th>
						<th class="patrOneth">Course Title</th>
						<th class="patrOneth">Prerequisites, Corequisites</th>
						<th class="patrOneth">L-T-P</th>
						<th class="patrOneth">Units</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td class="partOneth left">(a)Core Compulsory Courses</td>
						<td class="patrOneth">CSC 200</td>
						<td class="patrOneth">Student Industrial Work Experience Scheme I</td>
						<td class="patrOneth">CSC 201</td>
						<td class="patrOneth">0-0-9</td>
						<td class="patrOneth">3</td>
					</tr>
			</table>
		</div>

	</body>
</html>