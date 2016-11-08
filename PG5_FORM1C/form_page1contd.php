
<?php
	session_start();
	$con=mysqli_connect("localhost","root","","myDB");
	if(mysqli_connect_errno()){
		die("CONNECTION FALIED". " " .mysql_connect_err());
	}
	$q2="CREATE TABLE form1data(fn varchar(20), ln varchar(20), sa varchar(50), ci varchar(10), st varchar(10) ,pc varchar(6), land varchar(20) ,mp varchar(10) , email varchar(50)) PRIMARY KEY";
	$k=mysqli_query($con, $q2);
	$fn=$_POST['fn'];
	$ln=$_POST['ln'];
	$sa=$_POST['sa'];
	$ci=$_POST['ci'];
	$st=$_POST['st'];
	$pc=$_POST['pc'];
	$land=$_POST['land'];
	$mp=$_POST['mp'];
	$email=$_POST['email'];
	$_SESSION['email'] = $email;
//$p="INSERT INTO test (id,fn,ln,sa,ci,st,pc,land,mp,email) VALUES ($id,$fn,$ln,$sa,$ci,$st,$pc,$land,$mp,$email)";

if (mysqli_query($con,"INSERT INTO form1data VALUES ('$fn','$ln','$sa','$ci','$st','$pc','$land','$mp','$email')" )) {
} 
else {
		die("CONNECTION LOST");
}
mysqli_close($con);
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    
	<title>Work History</title>
	  
	<link rel="shortcut icon" type="image/png" href="/WT_NEW/pictures/favicon.ico"/>
	<link rel="stylesheet" href="/WT_NEW/PG5_FORM1C/nbs-form_page1contd.css" type="text/css"/>
	  <style>
		  .navbar-text > a{
		  	color:inherit;
			  text-decoration:none;
		  }
	  </style>
   
  </head>
	<body>
<!-- HEADER -->
	
	<div class="navtop">
		<ul class="navmain">
			<li><a href="/WT_NEW/PG1_HOMEPAGE/homepage.html" > Cook My Resume </a> </li>
		</ul>
		<ul class="navlist">
			<li><a href="/WT_NEW/PG1_HOMEPAGE/aboutus.html">About Us</a></li>
			<li><a href="/WT_NEW/PG1_HOMEPAGE/contactus.html">Contact Us</a></li>
			<li><a href="/WT_NEW/PG1_HOMEPAGE/login.html">Login</a></li>
		</ul>
	</div>


<!--END HEADER-->
	<br/>
	<br/>
	<br/>
	
	<br/>
	<br/>
	
	<div class="row">
	
		<div class="cols6">
			<p class="para"> Tips for Work History </p>
				<ul class="para-list">
					<li>Enter basic information about your previous jobs so employers can see where you’ve worked.</li>
					<li>Don’t abbreviate job titles. Using your full title looks more professional and is easier for managers to understand.</li>
					<li>Include start and end dates for each position. Leaving off dates will make employers think you’re hiding something.</li>
				</ul>
		</div>
	
		<div class="cols4">
				<img src="/WT_NEW/pictures/formpage1contd.png"></img>
		</div>
	
	</div>
	<div style="padding-top:30px;padding-bottom:135px;"><a class="btn" href="/WT_NEW/PG6_FORM2/form_page2.php" role="button" value="next-page" id="next">Next</a></div>
<!-- FOOTER -->	 
	<div class="footbottom">
			<span style="float:'left';">&nbsp;&nbsp;&nbsp;&copy;2016 Cook My Resume Inc.</span>
			<div class="footer-list">
				<a href="#"><img src="/WT_NEW/pictures/facebook.png" style="height:30px;width:30px;"/></a> &nbsp;&nbsp;&nbsp; 
				<a href="#"><img src="/WT_NEW/pictures/twitter.jpg" style="height:30px;width:30px;"/></a>    &nbsp;&nbsp;&nbsp;
				<a href="#"><img src="/WT_NEW/pictures/instagram.png" style="height:30px;width:30px;"/></a>&nbsp;&nbsp;&nbsp;
			</div>
	</div>
			
<!-- END FOOTER -->	 
       </body>
</html>

