<?php
		session_start();
		$html=$_POST['work_exp'];
		$email=$_SESSION['email'];
		$_SESSION['work_exp']=$html;
	/*	$html = str_replace( '<ul>', "" , $html);
		$html = str_replace( '<li>', "\201" , $html); // "\201 is the dot for unordered list"
		$html = str_replace( '</li>', "<br>" , $html);
		$html = str_replace( '</ul>', "" , $html );
		$html = str_replace( '&nbsp;',"",$html);
		$pdf=new PDF_HTML();
    $pdf->SetFont('Arial','',12);
    $pdf->AddPage();
    $pdf->WriteHTML($html);
    $pdf->Output();
		*/
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
	<title>Education and Skill</title>
	  
	<link rel="shortcut icon" type="image/png" href="/WT_NEW/pictures/favicon.ico"/>
	<link rel="stylesheet" href="/WT_NEW/PG7_FORM2C/nbs-form_page2contd.css" type="text/css"/>
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
	<br>
	<br>
	<br>
	<br>
	<br>
	<div class="row">
	
		<div class="cols6">
			<p class="para"> Tips for Education and Skills </p>
			<ul class="para-list">
				<li>Enter the Degree and the College/University attended</li>
				<li>Don’t abbreviate job titles. Using your full title looks more professional and is easier for managers to understand.</li>
				<li>Include start and end dates for each position. Specify duration at the least.</li>
			</ul>
		</div>
		<div class="cols4">
				<img src="/WT_NEW/pictures/form_page2contd.png"></img>
		</div>
	</div>
	
	<div style="padding-top:30px;padding-bottom:135px;"><a class="btn" href="/WT_NEW/PG8_FINAL/finalpage.php" role="button" value="next-page" 			id="next">Next</a></div>
	
	
	
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
