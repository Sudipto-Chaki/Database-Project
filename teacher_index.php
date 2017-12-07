<!DOCTYPE>
<?php 
	
	include("functions/funtion.php");
	
?>
<html>
	<head>
		<title>My Result Processing Website</title>
	 
	<link rel="stylesheet" href="teacher_styles/teacher_style.css" media="all" />
	
	</head>
	
<body>

	<!--Main Container starts here-->
	<div class="main_wrapper">

	
		<!--Header starts here-->
		<div class="header_wrapper">
		
			
			<img id="banner" src="images/image.gif" />
		</div>
		<!--Header ends here-->
		
		<!--Navigation Bar starts-->
		<div class="menubar">
			
			<ul id="menu">
				<li><a href="index.php">Home</a></li>
				<li><a href="admin login.php">Admin's Section</a></li>
				<li><a href="teacher_index.php">Teacher's Section</a></li>
				<li><a href="student login.php">Student's Section</a></li>
				<li><a href="#">About</a></li>
			</ul>
			
			<div id="form">
				
				<form method="get" action="results.php" enctype="multipart/form-data"> 
					<input type="text" name="user_query" / >
					<input type="submit" name="search" value="Search" /> 
				</form>
			
			</div>
			
		</div>
		<!--Navigation Bar ends-->
		
		
		<!--Content wrapper starts-->
		<div class="content_wrapper">
		
			<div id="sidebar">
			
				
				<div id="sidebar_title">Necessary Links</div>
				
				<ul id="cats">
				
					<li><a href="http://www.cuet.ac.bd">CUET</a></li>
					<li><a href="http://www.calculator.net/gpa-calculator.html">CGPA Calculator</a></li>
					<li><a href="https://www.khanacademy.org/">Khan Academy</a></li>
					<li><a href="https://www.researchgate.net/">Research Gate</a></li>
					<li><a href="https://www.coursera.org/">Coursera</a></li>
					<li><a href="http://10minuteschool.com/">10 Minutes School</a></li>
				
				</ul>
				
				<div id="sidebar_title">Teacher's Access</div>
				
				<ul id="cats">
				
					<li><a href="teacher_login.php">Click Here</a></li>
				
				</ul>
				
			</div>
		
			<div id="content_area" >
		<br>
				<h2 align="center"><div style="color:green">Faculty Members List</div></h2>
		<br>
<table style="background: #800000" xmlns="http://www.w3.org/1999/html" width="800">
    <tbody>

       <tr>
        <td class="">

            <div class="memberprofile">
                <div class="left">
                    <img alt="picture here" src="http://180.211.172.109/facultyPhoto/cse_moshiul.jpg" width="100" align="middle" height="100">
                </div>

                <div class="mid">
                    <b>Name:</b> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    Dr. Mohammed Moshiul Hoque<br>
                    <b>Designation:</b>  &nbsp;
                    Professor &amp; Head of the Department                    <br>
                    <b>Qualification:</b>  &nbsp;
                    BSc in EEE (CUET), MSc in CSE (BUET), PhD (Japan)                 </div>

                <div class="right">
                    <b>Phone:</b>  Cell: 8801716-133019<br>
                    <b>Email:</b>
                    moshiulh@yahoo.com; moshiul_240@cuet.ac.bd; mmoshiulh@gmail.com <br>
                    <a href=" http://180.211.172.109/index.php/department/staffProfile/cse_moshiul ">Information</a>
					<br>
					<br>
					<a href="pub_list.php">Publication</a>
					  <br>
					  <br>
					<a href="course_list.php">Courses</a>
					  <br>
					  <br>
					  <hr>
					  <br>

                </div>

            </div>
        </td>
    </tr>
 
     <tr>
        <td class="">

            <div class="memberprofile">
                <div class="left">
                    <img alt="picture here" src="http://180.211.172.109/facultyPhoto/cse_ibrahim.jpg" width="100" align="middle" height="100">
                </div>

                <div class="mid">
                    <b>Name:</b> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    Dr. Md. Ibrahim Khan<br>
                    <b>Designation:</b>  &nbsp;
                    Professor                    <br>
                    <b>Qualification:</b>  &nbsp;
                    B.Sc. in EEE (BUET), M.Sc. in CSE (BUET), PhD (JU)                 </div>

                <div class="right">
                    <b>Phone:</b>  01713-018506<br>
                    <b>Email:</b>
                    muhammad_ikhancuet@yahoo.com  <br>
                    <a href=" http://180.211.172.109/index.php/department/staffProfile/cse_ibrahim ">Click for Research & Publication</a>
					<br>
					  <br>
					  <hr>
					  <br>
                </div>

            </div>
        </td>
    </tr>
	

     <tr>
        <td class="">

            <div class="memberprofile">
                <div class="left">
                    <img alt="picture here" src="http://180.211.172.109/facultyPhoto/cse_kaushik.jpg" width="100" align="middle" height="100">
                </div>

                <div class="mid">
                    <b>Name:</b> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    Dr. Kaushik Deb<br>
                    <b>Designation:</b>  &nbsp;
                    Professor                     <br>
                    <b>Qualification:</b>  &nbsp;
                    B.Tech. in CSE (Russia), M.Tech. in CSE(Russia), PhD (South Korea)                </div>

                <div class="right">
                    <b>Phone:</b>  01914745508 <br>
                    <b>Email:</b>
                    debkaushik99@cuet.ac.bd, debkaushik99@gmail.com  <br>
                    <a href=" http://180.211.172.109/index.php/department/staffProfile/cse_kaushik ">Click for Research & Publication</a>
					<br>
					  <br>
					  <hr>
					  <br>
                </div>

            </div>
        </td>
    </tr>

     <tr>
        <td class="">

            <div class="memberprofile">
                <div class="left">
                    <img alt="picture here" src="http://180.211.172.109/facultyPhoto/cse_sarefin.jpg" width="100" align="middle" height="100">
                </div>

                <div class="mid">
                    <b>Name:</b> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    Dr. Mohammad Shamsul Arefin<br>
                    <b>Designation:</b>  &nbsp;
                    Professor                    <br>
                    <b>Qualification:</b>  &nbsp;
                    B. Sc. Engg. in CSE, KU, M. Sc. Engg. in CSE, BUET, PhD, Hiroshima University, Japan                 </div>

                <div class="right">
                    <b>Phone:</b>  880-31-723336, 01716890204<br>
                    <b>Email:</b>
                    sarefin@cuet.ac.bd, sarefin_406@yahoo.com <br>
                    <a href=" http://180.211.172.109/index.php/department/staffProfile/cse_sarefin ">Click for Research & Publication</a>
					<br>
					  <br>
					  <hr>
					  <br>
                </div>

            </div>
        </td>
    </tr>

     <tr>
        <td class="">

            <div class="memberprofile">
                <div class="left">
                    <img alt="picture here" src="http://180.211.172.109/facultyPhoto/cse_asad.jpg" width="100" align="middle" height="100">
                </div>

                <div class="mid">
                    <b>Name:</b> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    Dr. Asaduzzaman <br>
                    <b>Designation:</b>  &nbsp;
                    Professor                    <br>
                    <b>Qualification:</b>  &nbsp;
                    PhD                </div>

                <div class="right">
                    <b>Phone:</b>  01938534828 <br>
                    <b>Email:</b>
                    asad@cuet.ac.bd  <br>
                    <a href=" http://180.211.172.109/index.php/department/staffProfile/cse_asad ">Click for Research & Publication</a>
					<br>
					  <br>
					  <hr>
					  <br>
                </div>

            </div>
        </td>
    </tr>

     <tr>
        <td class="">

            <div class="memberprofile">
                <div class="left">
                    <img alt="picture here" src="http://180.211.172.109/facultyPhoto/cse_pranab.jpg" width="100" align="middle" height="100">
                </div>

                <div class="mid">
                    <b>Name:</b> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    Dr. Pranab Kumar Dhar<br>
                    <b>Designation:</b>  &nbsp;
                    Associate Professor                    <br>
                    <b>Qualification:</b>  &nbsp;
                    B.Sc. Engg.(CSE), CUET, M.Sc. Engg. (South Korea), Ph.D (Japan).                </div>

                <div class="right">
                    <b>Phone:</b>  <br>
                    <b>Email:</b>
                    pranab_cse@yahoo.com, pranabdhar81@gmail.com  <br>
                    <a href=" http://180.211.172.109/index.php/department/staffProfile/cse_pranab ">Click for Research & Publication</a>
					<br>
					  <br>
					  <hr>
					  <br>
                </div>

            </div>
        </td>
    </tr>

     <tr>
        <td class="">

            <div class="memberprofile">
                <div class="left">
                    <img alt="picture here" src="http://180.211.172.109/facultyPhoto/cse_saki.jpg" width="100" align="middle" height="100">
                </div>

                <div class="mid">
                    <b>Name:</b> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    Mir Md. Saki Kowsar<br>
                    <b>Designation:</b>  &nbsp;
                    Asst. Professor                    <br>
                    <b>Qualification:</b>  &nbsp;
                    B.Sc. in EEE (CUET), Pursuing M.Sc. in CSE                 </div>

                <div class="right">
                    <b>Phone:</b>  01713109890 <br>
                    <b>Email:</b>
                    sakikowsar@cuet.ac.bd  <br>
                    <a href=" http://180.211.172.109/index.php/department/staffProfile/cse_saki ">Click for Research & Publication</a>
					<br>
					  <br>
					  <hr>
					  <br>
                </div>

            </div>
        </td>
    </tr>

     <tr>
        <td class="">

            <div class="memberprofile">
                <div class="left">
                    <img alt="picture here" src="http://180.211.172.109/facultyPhoto/cse_hasnat.jpg" width="100" align="middle" height="100">
                </div>

                <div class="mid">
                    <b>Name:</b> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    Abu Hasnat Mohammad Ashfak Habib<br>
                    <b>Designation:</b>  &nbsp;
                    Asst. Professor                    <br>
                    <b>Qualification:</b>  &nbsp;
                    B.Sc. in EEE (CUET), M.Sc. in CSE (BUET) Pursuing Ph.D. in Malaysia                 </div>

                <div class="right">
                    <b>Phone:</b>  <br>
                    <b>Email:</b>
                    ashfak@bttb.net.bd  <br>
                    <a href=" http://180.211.172.109/index.php/department/staffProfile/cse_hasnat ">Click for Research & Publication</a>
					<br>
					  <br>
					  <hr>
					  <br>
                </div>

            </div>
        </td>
    </tr>

     <tr>
        <td class="">

            <div class="memberprofile">
                <div class="left">
                    <img alt="picture here" src="http://180.211.172.109/facultyPhoto/cse_obaidur.jpg" width="100" align="middle" height="100">
                </div>

                <div class="mid">
                    <b>Name:</b> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    Mohammad Obaidur Rahman<br>
                    <b>Designation:</b>  &nbsp;
                    Asst. Professor                    <br>
                    <b>Qualification:</b>  &nbsp;
                    B.Sc. in EEE (BUET), Pursuing M.Sc. in CSE                 </div>
					
                <div class="right">
                    <b>Phone:</b>  01731808646 <br>
                    <b>Email:</b>
                    obaidur_91@yahoo.com  <br>
                    <a href=" http://180.211.172.109/index.php/department/staffProfile/cse_obaidur ">Click for Research & Publication</a>
					<br>
					  <br>
					  <hr>
					  <br>
                </div>

            </div>
        </td>
    </tr>

     <tr>
        <td class="">

            <div class="memberprofile">
                <div class="left">
                    <img alt="picture here" src="http://180.211.172.109/facultyPhoto/cse_mokammel.jpg" width="100" align="middle" height="100">
                </div>

                <div class="mid">
                    <b>Name:</b> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    Dr. Md. Mokammel Haque<br>
                    <b>Designation:</b>  &nbsp;
                    Asst. Professor                    <br>
                    <b>Qualification:</b>  &nbsp;
                    B.Sc. (CUET), M.Sc. (KyungHee University, South Korea),  PhD (Macquarie University, Australia)                 </div>

                <div class="right">
                    <b>Phone:</b>  +88-031-723336, cell: +88-0172-7210737 <br>
                    <b>Email:</b>
                    malin405@yahoo.com, mokammel@cuet.ac.bd  <br>
                    <a href=" http://180.211.172.109/index.php/department/staffProfile/cse_mokammel ">Click for Research & Publication</a>
					<br>
					  <br>
					  <hr>
					  <br>
                </div>

            </div>
        </td>
    </tr>

     <tr>
        <td class="">

            <div class="memberprofile">
                <div class="left">
                    <img alt="picture here" src="http://180.211.172.109/facultyPhoto/cse_monjur.jpg" width="100" align="middle" height="100">
                </div>

                <div class="mid">
                    <b>Name:</b> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    Md. Monjur-Ul-Hasan<br>
                    <b>Designation:</b>  &nbsp;
                    Asst. Professor                    <br>
                    <b>Qualification:</b>  &nbsp;
                                    </div>

                <div class="right">
                    <b>Phone:</b>  <br>
                    <b>Email:</b>
                    monjur@cuet.ac.bd  <br>
                    <a href=" http://180.211.172.109/index.php/department/staffProfile/cse_monjur ">Click for Research & Publication</a>
					<br>
					  <br>
					  <hr>
					  <br>
                </div>

            </div>
        </td>
    </tr>

     <tr>
        <td class="">

            <div class="memberprofile">
                <div class="left">
                    <img alt="picture here" src="http://180.211.172.109/facultyPhoto/cse_khossen.jpg" width="100" align="middle" height="100">
                </div>

                <div class="mid">
                    <b>Name:</b> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    Muhammad Kamal Hossen<br>
                    <b>Designation:</b>  &nbsp;
                    Assistant Professor                    <br>
                    <b>Qualification:</b>  &nbsp;
                    B. Sc. in CSE (CUET), M. Sc. in CSE (CUET) and Pursuing Ph.D. in CSE                 </div>

                <div class="right">
                    <b>Phone:</b>  Mobile: +8801816012649
					Tel.:+88031714920~22, Ext.-2314 <br>
                    <b>Email:</b>
                    kamal_cuet@yahoo.com; mkhossen@cuet.ac.bd  <br>
                    <a href=" http://180.211.172.109/index.php/department/staffProfile/cse_khossen ">Click for Research & Publication</a>
					<br>
					  <br>
					  <hr>
					  <br>
                </div>

            </div>
        </td>
    </tr>

     <tr>
        <td class="">

            <div class="memberprofile">
                <div class="left">
                    <img alt="picture here" src="http://180.211.172.109/facultyPhoto/cse_thomas.jpg" width="100" align="middle" height="100">
                </div>

                <div class="mid">
                    <b>Name:</b> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    Thomas Chowdhury<br>
                    <b>Designation:</b>  &nbsp;
                    Assistant Professor                    <br>
                    <b>Qualification:</b>  &nbsp;
                    M.Sc                </div>

                <div class="right">
                    <b>Phone:</b>  01717-377878 <br>
                    <b>Email:</b>
                    thmschy@cuet.ac.bd <br>
                    <a href=" http://180.211.172.109/index.php/department/staffProfile/cse_thomas ">Click for Research & Publication</a>
					<br>
					  <br>
					  <hr>
					  <br>
                </div>

            </div>
        </td>
    </tr>

     <tr>
        <td class="">

            <div class="memberprofile">
                <div class="left">
                    <img alt="picture here" src="http://180.211.172.109/facultyPhoto/cse_prince.jpg" width="100" align="middle" height="100">
                </div>

                <div class="mid">
                    <b>Name:</b> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    Md. Enamul Hoque Prince<br>
                    <b>Designation:</b>  &nbsp;
                    Asst. Professor                    <br>
                    <b>Qualification:</b>  &nbsp;
                    B.Sc. Engineering (CSE), CUET                 </div>

                <div class="right">
                    <b>Phone:</b>  <br>
                    <b>Email:</b>
                    princecse_cuet@yahoo.com, enamul_hoque@cuet.ac.bd  <br>
                    <a href=" http://180.211.172.109/index.php/department/staffProfile/cse_prince ">Click for Research & Publication</a>
					<br>
					  <br>
					  <hr>
					  <br>
                </div>

            </div>
        </td>
    </tr>

     <tr>
        <td class="">

            <div class="memberprofile">
                <div class="left">
                    <img alt="picture here" src="http://180.211.172.109/facultyPhoto/cse_aniksaha.jpg" width="100" align="middle" height="100">
                </div>

                <div class="mid">
                    <b>Name:</b> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    Anik Saha<br>
                    <b>Designation:</b>  &nbsp;
                    Asst. Professor                    <br>
                    <b>Qualification:</b>  &nbsp;
                    B.Sc. Engineering (CSE), CUET                </div>

                <div class="right">
                    <b>Phone:</b>  <br>
                    <b>Email:</b>
                     <br>
                    <a href=" http://180.211.172.109/index.php/department/staffProfile/cse_aniksaha ">Click for Research & Publication</a>
					<br>
					  <br>
					  <hr>
					  <br>
                </div>

            </div>
        </td>
    </tr>

     <tr>
        <td class="">

            <div class="memberprofile">
                <div class="left">
                    <img alt="picture here" src="http://180.211.172.109/facultyPhoto/cse_taua.jpg" width="100" align="middle" height="100">
                </div>

                <div class="mid">
                    <b>Name:</b> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    Tauhidul Alam<br>
                    <b>Designation:</b>  &nbsp;
                    Asst. Professor                    <br>
                    <b>Qualification:</b>  &nbsp;
                    B. Sc. Engg. in Computer Science and Engineering, CUET                 </div>

                <div class="right">
                    <b>Phone:</b>  <br>
                    <b>Email:</b>
                    tauhid_cuet@cuet.ac.bd, tauhid03_cuet@yahoo.co.uk  <br>
                    <a href=" http://180.211.172.109/index.php/department/staffProfile/cse_taua ">Click for Research & Publication</a>
					<br>
					  <br>
					  <hr>
					  <br>
                </div>

            </div>
        </td>
    </tr>

     <tr>
        <td class="">

            <div class="memberprofile">
                <div class="left">
                    <img alt="picture here" src="http://180.211.172.109/facultyPhoto/cse_milon.jpg" width="100" align="middle" height="100">
                </div>

                <div class="mid">
                    <b>Name:</b> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    Md. Iqbal Hasan Sarker<br>
                    <b>Designation:</b>  &nbsp;
                    Asst. Professor                    <br>
                    <b>Qualification:</b>  &nbsp;
                    B.Sc. in CSE (CUET), M.Sc. in CSE (CUET) and Pursuing Ph.D. in Software Engineering (Australia)                </div>

                <div class="right">
                    <b>Phone:</b>  <br>
                    <b>Email:</b>
                    iqbal.sarker.cs@gmail.com <br>
                    <a href=" http://180.211.172.109/index.php/department/staffProfile/cse_milon ">Click for Research & Publication</a>
					<br>
					  <br>
					  <hr>
					  <br>
                </div>

            </div>
        </td>
    </tr>

     <tr>
        <td class="">

            <div class="memberprofile">
                <div class="left">
                    <img alt="picture here" src="http://180.211.172.109/facultyPhoto/cse_sujanc.jpg" width="100" align="middle" height="100">
                </div>

                <div class="mid">
                    <b>Name:</b> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    Sujan Chowdhury<br>
                    <b>Designation:</b>  &nbsp;
                    Lecturer                    <br>
                    <b>Qualification:</b>  &nbsp;
                    B.Sc. Engineering (CSE), CUET                </div>

                <div class="right">
                    <b>Phone:</b>  <br>
                    <b>Email:</b>
                    sujan_cse@cuet.ac.bd,sujan_cse_04@yahoo.com  <br>
                    <a href=" http://180.211.172.109/index.php/department/staffProfile/cse_sujanc ">Click for Research & Publication</a>
					<br>
					  <br>
					  <hr>
					  <br>
                </div>

            </div>
        </td>
    </tr>

     <tr>
        <td class="">

            <div class="memberprofile">
                <div class="left">
                    <img alt="picture here" src="http://180.211.172.109/facultyPhoto/cse_mhc.jpg" width="100" align="middle" height="100">
                </div>

                <div class="mid">
                    <b>Name:</b> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    Mahfuzulhoq Chowdhury<br>
                    <b>Designation:</b>  &nbsp;
                    Assistant Professor                    <br>
                    <b>Qualification:</b>  &nbsp;
                    M.Sc                 </div>

                <div class="right">
                    <b>Phone:</b>  <br>
                    <b>Email:</b>
                    mahfuz@cuet.ac.bd; mahfuz_csecuet@yahoo.com <br>
                    <a href=" http://180.211.172.109/index.php/department/staffProfile/cse_mhc ">Click for Research & Publication</a>
					<br>
					  <br>
					  <hr>
					  <br>
                </div>

            </div>
        </td>
    </tr>

     <tr>
        <td class="">

            <div class="memberprofile">
                <div class="left">
                    <img alt="picture here" src="http://180.211.172.109/facultyPhoto/cse_priyam.jpg" width="100" align="middle" height="100">
                </div>

                <div class="mid">
                    <b>Name:</b> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    Priyam Biswas<br>
                    <b>Designation:</b>  &nbsp;
                    Lecturer                    <br>
                    <b>Qualification:</b>  &nbsp;
                    B.Sc. Engineering (CSE), BUET                 </div>

                <div class="right">
                    <b>Phone:</b>  +88-01710805255<br>
                    <b>Email:</b>
                    priyam_cse@yahoo.com
					pbiswas@cuet.ac.bd <br>
                    <a href=" http://180.211.172.109/index.php/department/staffProfile/cse_priyam ">Click for Research & Publication</a>
					<br>
					  <br>
					  <hr>
					  <br>
                </div>

            </div>
        </td>
    </tr>

     <tr>
        <td class="">

            <div class="memberprofile">
                <div class="left">
                    <img alt="picture here" src="http://180.211.172.109/facultyPhoto/cse_monju.jpg" width="100" align="middle" height="100">
                </div>

                <div class="mid">
                    <b>Name:</b> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    Md. Monjurul Islam<br>
                    <b>Designation:</b>  &nbsp;
                    Lecturer                    <br>
                    <b>Qualification:</b>  &nbsp;
                    B.Sc. Engineering (CSE) ,CUET                </div>

                <div class="right">
                    <b>Phone:</b>  +8801719547887<br>
                    <b>Email:</b>
                    monju_cse05@yahoo.com,monju_cse05@cuet.ac.bd <br>
                    <a href=" http://180.211.172.109/index.php/department/staffProfile/cse_monju ">Click for Research & Publication</a>
					<br>
					  <br>
					  <hr>
					  <br>
                </div>

            </div>
        </td>
    </tr>

     <tr>
        <td class="">

            <div class="memberprofile">
                <div class="left">
                    <img alt="picture here" src="http://180.211.172.109/facultyPhoto/cse_mukta.jpg" width="100" align="middle" height="100">
                </div>

                <div class="mid">
                    <b>Name:</b> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    Rahma Bintey Mufiz Mukta<br>
                    <b>Designation:</b>  &nbsp;
                    Lecturer                    <br>
                    <b>Qualification:</b>  &nbsp;
                    B.Sc. Engineering (CSE), CUET                </div>

                <div class="right">
                    <b>Phone:</b>  <br>
                    <b>Email:</b>
                    rahmamukta@gmail.com <br>
                    <a href=" http://180.211.172.109/index.php/department/staffProfile/cse_mukta ">Click for Research & Publication</a>
					<br>
					  <br>
					  <hr>
					  <br>
                </div>

            </div>
        </td>
    </tr>

     <tr>
        <td class="">

            <div class="memberprofile">
                <div class="left">
                    <img alt="picture here" src="http://180.211.172.109/facultyPhoto/cse_lamia.jpg" width="100" align="middle" height="100">
                </div>

                <div class="mid">
                    <b>Name:</b> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    Lamia Alam<br>
                    <b>Designation:</b>  &nbsp;
                    Lecturer                    <br>
                    <b>Qualification:</b>  &nbsp;
                    B.Sc. Engineering (CSE), CUET                </div>

                <div class="right">
                    <b>Phone:</b>  <br>
                    <b>Email:</b>
                    lamiacse09@gmail.com; lamia_alam@cuet.ac.bd; <br>
                    <a href=" http://180.211.172.109/index.php/department/staffProfile/cse_lamia ">Click for Research & Publication</a>
					<br>
					  <br>
					  <hr>
					  <br>
                </div>

            </div>
        </td>
    </tr>

     <tr>
        <td class="">

            <div class="memberprofile">
                <div class="left">
                    <img alt="picture here" src="http://180.211.172.109/facultyPhoto/cse_shayla.jpg" width="100" align="middle" height="100">
                </div>

                <div class="mid">
                    <b>Name:</b> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    Shayla Sharmin<br>
                    <b>Designation:</b>  &nbsp;
                    Lecturer                    <br>
                    <b>Qualification:</b>  &nbsp;
                    B.Sc. Engineering (CSE), CUET                </div>

                <div class="right">
                    <b>Phone:</b>  01913911672<br>
                    <b>Email:</b>
                    shayla.turin@gmail.com <br>
                    <a href=" http://180.211.172.109/index.php/department/staffProfile/cse_shayla ">Click for Research & Publication</a>
					<br>
					  <br>
					  <hr>
					  <br>
                </div>

            </div>
        </td>
    </tr>

     <tr>
        <td class="">

            <div class="memberprofile">
                <div class="left">
                    <img alt="picture here" src="http://180.211.172.109/facultyPhoto/cse_sabir.jpg" width="100" align="middle" height="100">
                </div>

                <div class="mid">
                    <b>Name:</b> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    Md. Sabir Hossain<br>
                    <b>Designation:</b>  &nbsp;
                    Lecturer                    <br>
                    <b>Qualification:</b>  &nbsp;
                    B.Sc. Engineering (CSE), CUET                </div>

                <div class="right">
                    <b>Phone:</b>  +8801737143868<br>
                    <b>Email:</b>
                    sabirndc08cuet10@gmail.com
				<br>
                    <a href=" http://180.211.172.109/index.php/department/staffProfile/cse_sabir ">Click for Research & Publication</a>
					<br>
					  <br>
					  <hr>
					  <br>
                </div>

            </div>
        </td>
    </tr>

     <tr>
        <td class="">

            <div class="memberprofile">
                <div class="left">
                    <img alt="picture here" src="http://180.211.172.109/facultyPhoto/cse_farzana.jpg" width="100" align="middle" height="100">
                </div>

                <div class="mid">
                    <b>Name:</b> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    Farzana Yasmin<br>
                    <b>Designation:</b>  &nbsp;
                    Lecturer                    <br>
                    <b>Qualification:</b>  &nbsp;
                    B.Sc. Engineering (CSE), CUET                </div>

                <div class="right">
                    <b>Phone:</b>  +8801680-671851<br>
                    <b>Email:</b>
                    farzanaefu@gmail.com
 <br>
                    <a href=" http://180.211.172.109/index.php/department/staffProfile/cse_farzana ">Click for Research & Publication</a>
					<br>
					  <br>
					  <hr>
					  <br>
                </div>

            </div>
        </td>
    </tr>

     <tr>
        <td class="">

            <div class="memberprofile">
                <div class="left">
                    <img alt="picture here" src="http://180.211.172.109/facultyPhoto/cse_roy.jpg" width="100" align="middle" height="100">
                </div>

                <div class="mid">
                    <b>Name:</b> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    Animesh Chandra Roy<br>
                    <b>Designation:</b>  &nbsp;
                    Lecturer                    <br>
                    <b>Qualification:</b>  &nbsp;
                    B.Sc. Engineering (CSE), CUET                </div>

                <div class="right">
                    <b>Phone:</b>  +880173-8503339<br>
                    <b>Email:</b>
                    animesh_roy09cse@yahoo.com
 <br>
                    <a href=" http://180.211.172.109/index.php/department/staffProfile/cse_roy ">Click for Research & Publication</a>
					<br>
					  <br>
					  <hr>
					  
                </div>
			</div>
		</div>
		<!--Content wrapper ends-->
		
		
		
		<div id="footer">
		
		<h2 style="text-align:center; padding-top:13px;"><div style="color:black">&copy; 2016 By EMON & SUDIPTO</div></h2>
		
		</div>
	
	
	
	
	
	</div>
	
	
	
<!--Main Container ends here-->



</body>
</html>	