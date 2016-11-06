
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    
	<title>Personal Details</title>
	  
	<link rel="shortcut icon" type="image/png" href="/WT_NEW/pictures/favicon.ico"/>
	<link rel="stylesheet" href="/WT_NEW/PG4_FORM1/nbs-form_page1.css" type="text/css"/>
	<!--<link href="/WT_NEW/test.css" rel="stylesheet">-->
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
	<div class="all_s">
		<p class="s1" style="color:#6600ff"> Let's start with your Personal Details </p>
		<p class="s2" style="font-size:18px;text-align:left;font-family:'Trebuchet MS', Helvetica, sans-serif	;"><i> This information will be displayed on top of your Resume </i></p>
	</div>


	<form id="form1" method="post" action="/WT_NEW/PG5_FORM1C/form_page1contd.php">
	
		<div class="row">
	
			  <div class="cols3">
			    FIRST NAME:<br><input type="text" class="form-control" name="fn" placeholder="" required>
			  </div>
	
			  <div class="cols3">
			    LAST NAME:<br><input type="text" class="form-control" name="ln"  placeholder=""required>
			  </div>
			</div>
		</div>

		<div class="row">		
			  <div class="cols3">
			    STREET ADDRESS:<br><input type="text" class="form-control" name="sa"  placeholder=""required>
			  </div>
			  <div class="cols2">
			    STATE:<br><input type="text" class="form-control" name="st"  placeholder=""required>
			  </div>
			  <div class="cols1">
			    <span style="padding-left:30px;">PIN CODE:</span><br><input type="text" class="form-control" name="pc" placeholder=""required>
			  </div>
		</div>
		
		<div class="row">		
			  <div class="cols3">
			    CITY:<br><input type="text" class="form-control" name="ci"  placeholder=""required>
			  </div>
	
			  <div class="cols3">
			    MOBILE PHONE:<br><input type="text" class="form-control" name="mp"  placeholder=""required>
			  </div>
		</div>
		
		<div class="row">
	
			  <div class="cols3">
			    DATE OF BIRTH:<br><input type="date" class="form-control"name="land"  placeholder=""required>
			  </div>
			  <div class="cols3">
			 		CAREER FIELD:<br>
			 		<select class="soflow" id="selector1" required>
  						<option  value="">None</option>
  						<option value="1">Architecture</option>
  						<option value="2">Engineering</option>
  						<option value="3">Government</option>
  						<option value="4">Health Care</option>
					</select>
				</div>
			</div>

		</div>
		<div class="row">
			<div class="cols3">
				EMAIL ADDRESS:<br><input type="email" class="form-control" name="email"  placeholder=""required>
			</div>
			  <div class="cols3">
			 		CAREER SUB-FIELD:<br>
			 		<select class="soflow" id="selector2" required>
  						<option  value="">None</option>
					</select>
				</div>
		</div>

		<div class="button" style=" padding-bottom: 30px;">
			<input type="submit" value="Next" id="submit"/>	
		</div>
	
	</form>
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
	var yourSelect=document.getElementById("selector1");
	yourSelect.onclick=fun1;
	function fun1(event){
		var s1 = yourSelect.options[ yourSelect.selectedIndex ].value;
		var s2= document.getElementById("selector2");
		var myNode = document.getElementById("selector2");
		while (myNode.firstChild) {
    	myNode.removeChild(myNode.firstChild);
		}
		switch(s1){
			case "1":	var opt1=document.createElement('option'),opt2=document.createElement('option');
								opt1.value="1";
								opt1.innerHTML="Architects";
								opt2.value="2";
								opt2.innerHTML="Urban and Regional Planning";
								s2.appendChild(opt1);
								s2.appendChild(opt2);break;
			case "2": var opt1=document.createElement('option'),opt2=document.createElement('option'),opt3=document.createElement('option'),opt4=document.createElement('option');
								opt1.value="1";
								opt1.innerHTML="Civil Engineering";
								opt2.value="2";
								opt2.innerHTML="Electronics and Communications Engineering";
								opt3.value="3";
								opt3.innerHTML="Computer Science and Engineering";
								opt4.value="4";
								opt4.innerHTML="Mechanical Engineering";
								s2.appendChild(opt1);
								s2.appendChild(opt2);
								s2.appendChild(opt3);
								s2.appendChild(opt4);break;
			case "3": var opt1=document.createElement('option'),opt2=document.createElement('option');
								opt1.value="1";
								opt1.innerHTML="Policy Makers";
								opt2.value="2";
								opt2.innerHTML="Post Office";
								s2.appendChild(opt1);
								s2.appendChild(opt2);break;
			case "4": var opt1=document.createElement('option'),opt2=document.createElement('option'),opt3=document.createElement('option');
								opt1.value="1";
								opt1.innerHTML="Dentistry";
								opt2.value="2";
								opt2.innerHTML="Nursing";
								opt3.value="3";
								opt3.innerHTML="Therapists";
								s2.appendChild(opt1);
								s2.appendChild(opt2);
								s2.appendChild(opt3);break;
			default: 	break;
		}
	}
	
	var select2=document.getElementById("selector2");
	select2.onclick=fun2;
	function fun2(){
		var s2 = select2.options[ select2.selectedIndex ].text;
		sessionStorage.setItem("opt2", s2);
	}
</script>    
    
    
    
    
    
    
    
       </body>
</html>
