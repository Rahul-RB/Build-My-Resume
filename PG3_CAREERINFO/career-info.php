
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
	<title>Career Information</title>
	  
	<link rel="shortcut icon" type="image/png" href="/WT_NEW/pictures/favicon.ico"/>
	<link rel="stylesheet" href="/WT_NEW/PG3_CAREERINFO/nbs-career-info.css" type="text/css"/>
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
		</ul>
	</div>


<!--END HEADER-->
	<br/>
	<br/>
	<br/>
	
	<div class="heading-1">
		<p class="heading">	Select Your Profession </p>
	</div>
	
	<div class="row" id="ROW1">
		<div class="item" id="student">Student
		</div>
		<div class="item"	id="entry-level">Entry-Level
		</div>
	</div>

	<div class="row" id="ROW2">
		<div class="item" id="experienced">Experienced
		</div>
		<div class="item" id="manager">Manager
		</div>
	</div>
		
		 
		
  	<div id="text-display">

  	</div>  
			<a class="button" role="button" onclick="check()" id="submit" value="Next">Next</a>
		
		
	<br/>
	<br/>
	<br/>
	<br/>
	<br/>
	<br/>
	<br/>
	<br/>
	<br/>
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
<script>
document.getElementById("student").onclick=fun1;
document.getElementById("entry-level").onclick=fun1;
document.getElementById("experienced").onclick=fun1;
document.getElementById("manager").onclick=fun1;
function fun1(event){
	var k=event.target.id,s;
	var text_div=document.getElementById("text-display");
	switch(k){
		case "student":s="student";break;
		case "entry-level":s="Entry-Level";break;
		case "experienced":s="Experienced";break;
		case "manager":s="Manager";break;
	}	
	text_div.innerHTML="You have chosen: "+s+" ";
	sessionStorage.setItem("career_clicked", k);
}				
function check(){
	var k=sessionStorage.getItem("career_clicked");
	if(k!=null){
		var button=document.getElementById('submit');
		button.href="/WT_NEW/PG4_FORM1/form_page1.php";
	}
	else{
		alert("Please click on the closest option and press 'Next'");
	}
	
}										
</script>	
	</body>
</html>
