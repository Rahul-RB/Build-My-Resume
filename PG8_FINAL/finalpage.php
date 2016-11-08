<?php
	session_start();
	if(isset($_SESSION['email'])){
	
		$con=mysqli_connect("localhost","root","","myDB");
		if(mysqli_connect_errno()){
			die("CONNECTION FALIED". " " .mysqli_connect_errno());
			}
		$email=$_SESSION['email'];
		$work_exp=$_SESSION['work_exp'];

		$query="SELECT fn,ln,ci,st,mp,email FROM form1data WHERE email='$email'";
		$result=mysqli_query($con,$query);
		
		if(!$result){
			die("NO SUCH DATA! ".mysqli_errno());
		} 
	
		//USE BELOW FOR NAME, PHONE NUMBER AND EMAIL.
		$row = mysqli_fetch_assoc($result);
	
		//ALL PERSONAL VARIABLES
		$fn=$row['fn'];
		$ln=$row['ln'];
		$ci=$row['ci'];
		$st=$row['st'];
		$mp=$row['mp'];
		$email=$row['email'];
		
		//USER ENTERED WORK EXPERIENCE
		$work_exp=$_SESSION['work_exp'];

	}
	else{
		echo "<strong>You're not Registered, Please click here to go back to homepage</strong>";
	}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    
	<title>Work Experience</title>
	  
	<link rel="shortcut icon" href="/WT_NEW/pictures/favicon.ico" type="image/png" />
	<link rel="stylesheet" href="/WT_NEW/font-awesome/css-fa/font-awesome.min.css">
	<link rel="stylesheet" href="/WT_NEW/PG8_FINAL/nbs-finalpage.css" type="text/css"/>
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
<div	id="t1">
	<span id="t11">Enter your Education details :</span><br><br>
	Enter details of Universities for a maximum of 3 degrees. <br>
	<i><span style="font-size:20px">At least one degree is mandatory</span></i>
	<br/>
		
</div>


	<div class="max_container1">
		<div class="row">
	
			  <div class="cols3">
			    UNIVERSITY NAME:<br><input type="text" class="form-control" id="un1" placeholder="">
			  </div>
	
			  <div class="cols3">
			    UNIVERSITY NAME:<br><input type="text" class="form-control" id="un2"  placeholder="" >
			  </div>
			  
			  <div class="cols3">
			    UNIVERSITY NAME:<br><input type="text" class="form-control" id="un3"  placeholder="" >
			  </div>
		</div>

		<div class="row">		
			  <div class="cols3">
			    DEGREE:<br><input type="text" class="form-control" id="de1"  placeholder=""required>
			  </div>
			  
			  <div class="cols3">
			    DEGREE:<br><input type="text" class="form-control" id="de2"  placeholder="">
			  </div>
			  
			  <div class="cols3">
			    DEGREE:<br><input type="text" class="form-control" id="de3"  placeholder="">
			  </div>
		</div>
		
		<div class="row">		
			  <div class="cols3">
			    FIELD OF STUDY:<br><input type="text" class="form-control" id="fos1"  placeholder=""required>
			  </div>
			  
			  <div class="cols3">
			    FIELD OF STUDY:<br><input type="text" class="form-control" id="fos2"  placeholder="">
			  </div>
			  
			  <div class="cols3">
			    FIELD OF STUDY:<br><input type="text" class="form-control" id="fos3"  placeholder="">
			  </div>
		</div>
		
		<div class="row">		
			  <div class="cols3">
			    GRADUATION YEAR:<br><input type="text" class="form-control" id="gy1"  placeholder=""required>
			  </div>
	
			  <div class="cols3">
			    GRADUATION YEAR:<br><input type="text" class="form-control" id="gy2"  placeholder="">
			  </div>
			  
			  <div class="cols3">
			    GRADUATION YEAR:<br><input type="text" class="form-control" id="gy3"  placeholder="">
			  </div>
		</div>
		
	</div> <!-- DONT REMOVE -->
	
	
		<div id="t1" style="padding-top:30px;">
			<span id="t11">Enter your Skills :</span><br><br>
			Enter a minimum of 3 skills. 
		</div>
	<div class="max_container2">
		<div class="row">		
			  <div class="cols3">
			    SKILL #1:<br><input type="text" class="form-control" id="s1"  placeholder="">
			  </div>
	
			  <div class="cols3">
			    SKILL #2:<br><input type="text" class="form-control" id="s2"  placeholder="">
			  </div>
			  
			  <div class="cols3">
			    SKILL #3:<br><input type="text" class="form-control" id="s3"  placeholder="">
			  </div>
		</div>
		<div class="row">		
			  <div class="cols3">
			    SKILL #4:<br><input type="text" class="form-control" id="s4"  placeholder="">
			  </div>
	
			  <div class="cols3">
			    SKILL #5:<br><input type="text" class="form-control" id="s5"  placeholder="">
			  </div>
			  
			  <div class="cols3">
			    SKILL #6:<br><input type="text" class="form-control" id="s6"  placeholder="">
			  </div>
		</div>
	</div>
	
		<div>
			<a class="button" id="submit" onclick="fun2()">Next</a> 
		</div>
	
<!--	
		//ALL PERSONAL VARIABLES
		$fn=$row['fn'];
		$ln=$row['ln'];
		$ci=$row['ci'];
		$st=$row['st'];
		$mp=$row['mp'];
		$email=$row['email'];
		
		//USER ENTERED WORK EXPERIENCE
		$work_exp=$_SESSION['work_exp'];
-->
<div style="display: none;">
	<p id="fn"><?php echo htmlspecialchars($fn);?></p>
	<p id="ln"><?php echo htmlspecialchars($ln);?></p>
	<p id="ci"><?php echo htmlspecialchars($ci);?></p>
	<p id="st"><?php echo htmlspecialchars($st);?></p>
	<p id="mp"><?php echo htmlspecialchars($mp);?></p>
	<p id="email"><?php echo htmlspecialchars($email);?></p>
	<p id="work_exp"><?php echo htmlspecialchars($work_exp);?></p>
</div>


<br>
<br>
<br>
<br>
<br>

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

<script type="text/javascript">
		
	var fn = document.getElementById('fn').textContent;
	var ln = document.getElementById('ln').textContent;
	var ci = document.getElementById('ci').textContent;
	var st = document.getElementById('st').textContent;
	var mp = document.getElementById('mp').textContent;
	var email = document.getElementById('email').textContent;
	var work_exp = document.getElementById('work_exp').textContent;

	sessionStorage.setItem("fn",fn);
	sessionStorage.setItem("ln",ln);
	sessionStorage.setItem("ci",ci);
	sessionStorage.setItem("st",st);
	sessionStorage.setItem("mp",mp);
	sessionStorage.setItem("email",email);
	sessionStorage.setItem("work_exp",work_exp);
	/*
	alert(sessionStorage.getItem("fn"));
	alert(sessionStorage.getItem("ln"));
	alert(sessionStorage.getItem("ci"));
	alert(sessionStorage.getItem("st"));
	alert(sessionStorage.getItem("mp"));
	alert(sessionStorage.getItem("email"));
	alert(sessionStorage.getItem("work_exp"));
	*/
		function fun2(){
		var i=0,j='0';
		sessionStorage.setItem("un1",document.getElementById('un1').value);
		sessionStorage.setItem("un2",document.getElementById('un2').value);
		sessionStorage.setItem("un3",document.getElementById('un3').value);
		sessionStorage.setItem("de1",document.getElementById('de1').value);
		sessionStorage.setItem("de2",document.getElementById('de2').value);
		sessionStorage.setItem("de3",document.getElementById('de3').value);
		sessionStorage.setItem("fos1",document.getElementById('fos1').value);
		sessionStorage.setItem("fos2",document.getElementById('fos2').value);
		sessionStorage.setItem("fos3",document.getElementById('fos3').value);
		sessionStorage.setItem("gy1",document.getElementById('gy1').value);
		sessionStorage.setItem("gy2",document.getElementById('gy2').value);
		sessionStorage.setItem("gy3",document.getElementById('gy3').value);
		
		sessionStorage.setItem("s1",document.getElementById('s1').value);
		sessionStorage.setItem("s2",document.getElementById('s2').value);
		sessionStorage.setItem("s3",document.getElementById('s3').value);
		sessionStorage.setItem("s4",document.getElementById('s4').value);
		sessionStorage.setItem("s5",document.getElementById('s5').value);
		sessionStorage.setItem("s6",document.getElementById('s6').value);
	
		var a=document.getElementById('submit');
		var k=sessionStorage.getItem("template_clicked");
		switch(k){
			case '1':a.href="/WT_NEW/PG9_PDF/hero.html";break;//done
			case '2':a.href="/WT_NEW/PG9_PDF/tbm.html";break;//done
			case '3':a.href="/WT_NEW/PG9_PDF/tpp.html";break;//done
			case '4':a.href="/WT_NEW/PG9_PDF/light.html";break; //done
			case '5':a.href="/WT_NEW/PG9_PDF/pop.html";break;//done
			case '6':a.href="/WT_NEW/PG9_PDF/winner.html";break;//done
		}	
		}
</script>

  </body>
</html>
