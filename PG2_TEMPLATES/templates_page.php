
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
     
	<title>Templates</title>
	  
	<link rel="shortcut icon" type="image/png" href="/WT_NEW/pictures/favicon.ico"/>
	<link rel="stylesheet" href="/WT_NEW/PG2_TEMPLATES/nbs-templates.css" type="text/css"/>
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
  <!-- TEMPLATES-INFO-->
    <div class="textbox">
      <p> Step 1: Choose your template </p>
    </div>
  <!-- END TEMPALTES-INFO -->  
	<!-- TEMPLATES-CAROUSEL-->
    <div class="slideshow">
    	
    	<div class="mySlides Fade">
    		<div class="image"style="display:inline;">
    		  	<img src="/WT_NEW/pictures/t1.png" id="1">
    		  	<span class="pic"> Hero </span>
  			</div>
  			<div class="image"style="display:inline;">
  					<img src="/WT_NEW/pictures/t4.png" id="2">
  					<span class="pic"> The Business Man</span>
 				</div>
  		</div>
		
		<div class="mySlides Fade">
			<div class="image"style="display:inline;">
  	 			<img src="/WT_NEW/pictures/t3.png" id="5">
  				<span class="pic">Popular</span>
  		</div>
		<div class="image"style="display:inline;">
  				<img src="/WT_NEW/pictures/t6.png" id="6">
  				<span class="pic">Winner</span>
  	</div>
		</div>

		<div class="mySlides Fade">
			<div class="image"style="display:inline;">
		  		<img src="/WT_NEW/pictures/t2.png" id="3">
  				<span class="pic"> The Pro Pack</span>
  		</div>
			<div class="image"style="display:inline;">
  				<img src="/WT_NEW/pictures/t5.png" id="4">
  				<span class="pic"> Lighthouse</span>
  		</div>
  	</div>
<a class="prev" onclick="plusSlides(-1)">&lsaquo;</a>
<a class="next" onclick="plusSlides(1)">&rsaquo;</a>

</div>
<br>
	<!-- END TEMPLATES-CAROUSEL-->
  	<div id="text-display">

  	</div>  
			<a class="button" role="button" onclick="check()" id="submit" value="Next">Next</a>
	
<!-- FOOTER -->	
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
			<span class="footer-main"style="float:'left';">&nbsp;&nbsp;&nbsp;&copy;2016 Cook My Resume Inc.</span>
			<div class="footer-list">
				<a href="#"><img src="/WT_NEW/pictures/facebook.png" style="height:30px;width:30px;"/></a> &nbsp;&nbsp;&nbsp; 
				<a href="#"><img src="/WT_NEW/pictures/twitter.jpg" style="height:30px;width:30px;"/></a>    &nbsp;&nbsp;&nbsp;
				<a href="#"><img src="/WT_NEW/pictures/instagram.png" style="height:30px;width:30px;"/></a>&nbsp;&nbsp;&nbsp;
			</div>
	</div>
			
<!-- END FOOTER -->	  
  
<script>
var slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
  showSlides(slideIndex += n);
}

function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  if (n > slides.length) {slideIndex = 1}
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";
  }
  slides[slideIndex-1].style.display = "block";
}

document.getElementById("1").onclick=fun1;
document.getElementById("2").onclick=fun1;
document.getElementById("3").onclick=fun1;
document.getElementById("4").onclick=fun1;
document.getElementById("5").onclick=fun1;
document.getElementById("6").onclick=fun1;				

function fun1(event){
	var k=event.target.id ,s;
	var text_div=document.getElementById("text-display");
	switch(k){
		case '1':s="Hero";break;
		case '2':s="The Business Man";break;
		case '3':s="The Pro Pack";break;
		case '4':s="LightHouse";break;
		case '5':s="Popular";break;
		case '6':s="Winner";break;
	}	
	text_div.innerHTML="You have chosen "+s+" template";
	sessionStorage.setItem("template_clicked", k);
}				
function check(){
	var k=sessionStorage.getItem("template_clicked");
	if(k!=null){
		var button=document.getElementById('submit');
		button.href="/WT_NEW/PG3_CAREERINFO/career-info.php";
	}
	else{
		alert("Please click on the template and press 'Next'");
	}
	
}										
</script>

       </body>
</html>
