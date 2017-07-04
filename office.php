<?php
session_name('user');
session_start();
if(isset($_SESSION['matricnumber'])==false)
header('Location:index.php');
?>
<html>
	<head>
		<title></title>
		<link rel="stylesheet" type="text/css" href="myStyle.css">
		<link rel="icon" type="image/jpg" href="images/logo.jpg" />
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
						<li><a href="profile.php">Profile Page |</span></a></li>
						<li><a href="textbook.php">TextBooks |</a></li>
						<li><a href="pastQuestion.php">Past Questions |</a></li>
						<li><a href="office.php"><span style="background-color: black; padding: 4px;">Locate Office |</span></a></li>
						<li><a href="Courses.php">Courses |</a></li>
						<li><a href="logout.php">Log Out</a></li>
					</ul>
					</ul>
				</div>
			</div>

		<div id="tableWrapper">
			<h3 class="staff">List of Departmental Staff - Rank, Qualifications, Areas of Specialization, Room Number </h3>
		
			<table id="table">
				<thead>
					<tr>
						<th class="officeth">Name Of Staff</th>
						<th class="officeth">Rank</th>
						<th class="officeth">Degree</th>
						<th class="officeth">Area of Specialization</th>
						<th class="officeth">Room Number</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td class="officeth">A.I Oluwaranti (HOD)</td>
						<td class="officeth">Senior Lecturer</td>
						<td class="officeth">Bsc. Msc. Ph D (Ife)</td>
						<td class="officeth">Wireless Networking, Hardware System Design</td>
						<td class="officeth">205 - 206</td>
					</tr>
					<tr>
						<td class="officeth">E.R Adaguodo</td>
						<td class="officeth">Prof.</td>
						<td class="officeth">Bsc. Msc. Ph D (Ife)</td>
						<td class="officeth">Networking Distributed Os and Software Engineering</td>
						<td class="officeth">118</td>
					</tr>
					<tr>
						<td class="officeth">G.A.Aderounmi</td> 
						<td class="officeth">Prof.</td>
						<td class="officeth">Bsc. Msc. Ph D (Ife)</td>
						<td class="officeth">design, Analysis and Similarities of ATM Networks, Distributed Systems, Network management</td>
						<td class="officeth">119</td>
					</tr>
					<tr>
						<td class="officeth">H.A Soriyan</td>
						<td class="officeth">Reader.</td>
						<td class="officeth">Bsc. Msc. Ph D (Ife)</td>
						<td class="officeth">Information System, Software Engineering, Software Development Methodologies, Health Information System</td>
						<td class="officeth">106</td>
					</tr>
					<tr>
						<td class="officeth">O.A Odejobi</td>
						<td class="officeth">Senior Lecturer</td>
						<td class="officeth">Bsc. Msc.(Ife) Ph D (Uk)</td>
						<td class="officeth">Computing and Intelligient Suystem Engineering</td>
						<td class="officeth">109</td>
					</tr>
					<tr>
						<td class="officeth">B.S Afolabi</td>
						<td class="officeth">Senior Lecturer</td>
						<td class="officeth">Bsc.(Ife) M.Phil(Ife) Ph D (France)</td>
						<td class="officeth">Numerical Computation, Database Modelling and Simulation, Information Systems</td>
						<td class="officeth">116</td>
					</tr>
					<tr>
						<td class="officeth">A.O Oluwatope</td>
						<td class="officeth">Senior Lecturer</td>
						<td class="officeth">Bsc. Msc. Ph D (Ife)</td>
						<td class="officeth">Microprocessor Technology and Digital Systems</td>
						<td class="officeth">319</td>
					</tr>
					<tr>
						<td class="officeth">A.O Ajayi</td>
						<td class="officeth">Senior Lecturer</td>
						<td class="officeth">Bsc.(Ghana) Msc. Ph D (Ife)</td>
						<td class="officeth">Geographical Information System, Artificial Intelligence</td>
						<td class="officeth">107</td>
					</tr>
					<tr>
						<td class="officeth">E.A Olajubu</td>
						<td class="officeth">Senior Lecturer</td>
						<td class="officeth">Bsc. Msc. Ph D (Ife)</td>
						<td class="officeth">Database Management System</td>
						<td class="officeth">104</td>
					</tr>
					<tr>
						<td class="officeth">I.O Awoyelu</td>
						<td class="officeth">Senior Lecturer</td>
						<td class="officeth">Bsc. Msc. Ph D (Ife)</td>
						<td class="officeth">Dataware Housing Mobile</td>
						<td class="officeth">120</td>
					</tr>
					<tr>
						<td class="officeth">P.A Idowu</td>
						<td class="officeth">Senior Lecturer</td>
						<td class="officeth">Bsc. Msc. Ph D (Ife)</td>
						<td class="officeth">Web Based Geographic Information system for Epidermiological Surveillance</td>
						<td class="officeth">320</td>
					</tr>
					<tr>
						<td class="officeth">S.A Bello </td>
						<td class="officeth">Lecturer I</td>
						<td class="officeth">Bsc. Msc. Ph D (Ife)</td>
						<td class="officeth">Hardware System Design</td>
						<td class="officeth">108</td>
					</tr>
					<tr>
						<td class="officeth">S.I Eludioua</td>
						<td class="officeth">Lecturer I</td>
						<td class="officeth">Bsc. Msc. Ph D (Ife)</td>
						<td class="officeth">Network Load Balancing</td>
						<td class="officeth">321</td>
					</tr>
					<tr>
						<td class="officeth">R.N Ikono(Mrs) </td>
						<td class="officeth">Lecturer I</td>
						<td class="officeth">Bsc.(Uyo) Msc. Ph D (Ife)</td>
						<td class="officeth">Crypthographic techniques for Mobile agent Systems, Information Systems</td>
						<td class="officeth">103</td>
					</tr>
					<tr>
						<td class="officeth">F.O Asahiah </td>
						<td class="officeth">Lecturer I</td>
						<td class="officeth">Bsc. Msc. Ph D (Ife)</td>
						<td class="officeth">Machine Translation and Computaional Linguistic</td>
						<td class="officeth">203</td>
					</tr>
					<tr>
						<td class="officeth">A.R Iyanda </td>
						<td class="officeth">Lecturer I</td>
						<td class="officeth">Bsc. Msc. Ph D (Ife)</td>
						<td class="officeth">Computational and Intelligient Engineering</td>
						<td class="officeth">103</td>
					</tr>
					<tr>
						<td class="officeth">B.O Akinyemi (Mrs)</td>
						<td class="officeth">Lecturer I</td>
						<td class="officeth">Bsc.(LAUTECH) Msc. Ph D (Ife)</td>
						<td class="officeth">Hardware System Design</td>
						<td class="officeth">108</td>
					</tr>
					<tr>
						<td class="officeth">K.C Olufolumbi</td>
						<td class="officeth">Lecturer I</td>
						<td class="officeth">Bsc. Msc. </td>
						<td class="officeth">ISD Methods - Participatory Design, Health Information</td>
						<td class="officeth">110</td>
					</tr>
					<tr>
						<td class="officeth">D.F Ninan</td>
						<td class="officeth">Lecturer I</td>
						<td class="officeth">Bsc.(Lagos) Msc. (Ibadan), PGD, M.Sc(Ife)</td>
						<td class="officeth">Adaptive Hypermedia Systems</td>
						<td class="officeth">203</td>
					</tr>
					<tr>
						<td class="officeth">B.I Akhigbe</td>
						<td class="officeth">Lecturer I</td>
						<td class="officeth">Bsc.(Benin) Msc (Ibadan)</td>
						<td class="officeth">Human Machine Interactions, Information Systems</td>
						<td class="officeth">105</td>
					</tr>
					<tr>
						<td class="officeth">M.L Sanni</td>
						<td class="officeth">Lecturer II</td>
						<td class="officeth">Bsc. Msc.(Ife)</td>
						<td class="officeth">Data Communication Networks</td>
						<td class="officeth">105</td>
					</tr>
					<tr>
						<td class="officeth">L.A Akanbi</td>
						<td class="officeth">Lecturer II</td>
						<td class="officeth">Bsc. Msc.(Ife)</td>
						<td class="officeth">Computing Intelligient Engineering</td>
						<td class="officeth">321</td>
					</tr>
					<tr>
						<td class="officeth">I.P Gambo</td>
						<td class="officeth">Lecturer II</td>
						<td class="officeth">Bsc. Msc.(Ife)</td>
						<td class="officeth">Information System</td>
						<td class="officeth">105</td>
					</tr>
					<tr>
						<td class="officeth">O.T Omodunbi</td>
						<td class="officeth">Lecturer II</td>
						<td class="officeth">Bsc. Msc.(Ife)</td>
						<td class="officeth">Information Systems</td>
						<td class="officeth">010</td>
					</tr>
					<tr>
						<td class="officeth">O.H Odukoya(Mrs)</td>
						<td class="officeth">Assistant Lecturer</td>
						<td class="officeth">Bsc. Msc.(Ife)</td>
						<td class="officeth">Numerical Computation, Analogue Computing</td>
						<td class="officeth">120</td>
					</tr>
					<tr>
						<td class="officeth">A.O Afolabi</td>
						<td class="officeth">Assistant Lecturer </td>
						<td class="officeth">Bsc. Msc.(Ife)</td>
						<td class="officeth">Result Processing</td>
						<td class="officeth">200</td>
					</tr>
					<tr>
						<td class="officeth">O.O Akinade</td>
						<td class="officeth">Assistant Lecturer </td>
						<td class="officeth">Bsc. Msc.(Ife)</td>
						<td class="officeth">Computing and Intelligient Engineering</td>
						<td class="officeth">124</td>
					</tr>
					<tr>
						<td class="officeth">A.O Amoo</td>
						<td class="officeth">Graduate Assistant </td>
						<td class="officeth">B.Sc.(Ife)</td>
						<td class="officeth">Data Warehousing and Data Mining</td>
						<td class="officeth">009</td>
					</tr>
					<tr>
						<td class="officeth">O.T Oyegoke</td>
						<td class="officeth">Graduate Assistant </td>
						<td class="officeth">B.Sc.(Ife)</td>
						<td class="officeth">Information Systems</td>
						<td class="officeth">010</td>
					</tr>
					<tr>
						<td class="officeth">A.R Lawal</td>
						<td class="officeth">Graduate Assistant </td>
						<td class="officeth">B.Sc.(Ife)</td>
						<td class="officeth">Wireless Networking, Hardware System Design</td>
						<td class="officeth">008</td>
					</tr>			
					<tr>
						<td class="officeth">S. Ayeni</td>
						<td class="officeth">Graduate Assistant </td>
						<td class="officeth">B.Sc.(LAUTECH)</td>
						<td class="officeth">Wireless Networking, Hardware System Design</td>
						<td class="officeth">124</td>
					</tr>
					<tr>
						<td class="officeth">S.D Okegbile</td>
						<td class="officeth">Graduate Assistant </td>
						<td class="officeth">B.Sc.(LAUTECH)</td>
						<td class="officeth">Wireless Networking, Hardware System Design</td>
						<td class="officeth">124</td>
					</tr>
					<tr>
						<td class="officeth">M.A Salami</td>
						<td class="officeth">Principal Technologist </td>
						<td class="officeth"></td>
						<td class="officeth"></td>
						<td class="officeth">007B</td>
					</tr>
					<tr>
						<td class="officeth">H.A.O Ola</td>
						<td class="officeth">Chief Technical Officer</td>
						<td class="officeth"></td>
						<td class="officeth"></td>
						<td class="officeth">M31</td>
					</tr>
					<tr>
						<td class="officeth">E.J Abuloye</td>
						<td class="officeth">Chief Workshop Supervisor </td>
						<td class="officeth"></td>
						<td class="officeth"></td>
						<td class="officeth">100</td>
					</tr>
					<tr>
						<td class="officeth">O.F Towobola</td>
						<td class="officeth">Trainee Computer Operator II </td>
						<td class="officeth">WAEC, OND in Data Processing</td>
						<td class="officeth"></td>
						<td class="officeth">STEP-B Building</td>
					</tr>
					<tr>
						<td class="officeth">O.M Oni</td>
						<td class="officeth">Assistant Technical Officer</td>
						<td class="officeth">OND Computer Science, Diploma in Hardware, Maintenance and Services</td>
						<td class="officeth"></td>
						<td class="officeth">STEP-B Building</td>
					</tr>
					<tr>
						<td class="officeth">S.O Oguntokun</td>
						<td class="officeth">Assistant Technical Officer</td>
						<td class="officeth">HND Computer Science</td>
						<td class="officeth"></td>
						<td class="officeth">STEP-B Building</td>
					</tr>
					<tr>
						<td class="officeth">A.I Oladele</td>
						<td class="officeth">Confidental Secretary</td>
						<td class="officeth">HND Office Technology Management</td>
						<td class="officeth"></td>
						<td class="officeth">207</td>
					</tr>
					<tr>
						<td class="officeth">I.O Olawole</td>
						<td class="officeth">Chief Secretariat Assistant</td>
						<td class="officeth">Comm Four 50 WPM, EDP</td>
						<td class="officeth"></td>
						<td class="officeth">208</td>
					</tr>
					<tr>
						<td class="officeth">J.O Oyetunji</td>
						<td class="officeth">Chief Secretariat Assistant i</td>
						<td class="officeth">Grad Test II & III, 50 WPM, Compt Fund, EDP</td>
						<td class="officeth"></td>
						<td class="officeth">208</td>
					</tr>
					<tr>
						<td class="officeth">B.D Oyewole</td>
						<td class="officeth">Chief Clerical Officer</td>
						<td class="officeth">F.C.G.T.C Diploma</td>
						<td class="officeth"></td>
						<td class="officeth">208</td>
					</tr>
					<tr>
						<td class="officeth">Y.E Adewole</td>
						<td class="officeth">Secretariat Assistant II</td>
						<td class="officeth">WAEC, RSA Stages I & II, UNIFECS Stage III</td>
						<td class="officeth"></td>
						<td class="officeth">208</td>
					</tr>
					<tr>
						<td class="officeth">G.E Agabi</td>
						<td class="officeth">Clerical Officer</td>
						<td class="officeth">SSCE</td>
						<td class="officeth"></td>
						<td class="officeth">208</td>
					</tr>
				</tbody>
			</table>
		</div>
		<div id="eis_footer">
			&copy;2016 - <b>Computer Science & Engineering Student Assistance System</b>
		</div>
	</div>
	</body>
</html>