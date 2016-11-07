
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    
	<title>Work Experience</title>
	  
	<link rel="shortcut icon" href="/WT_NEW/pictures/favicon.ico" type="image/png" />
	<link rel="stylesheet" href="/WT_NEW/PG6_FORM2/nbs-form_page2.css" type="text/css"/>
	  <style>
		  .navbar-text > a{
		  	color:inherit;
			  text-decoration:none;
		  }
	  </style>
	
  </head>
	<body onload="fun1()">
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
<div class="row">
	<div class="col-md-12" id="t1">
		<b><span style="font-size:30px">Enter your Work Experience details :</span></b><br>
		This can also include your internships,
		projects you have done etc. <br/>
		Some helpful points (based on your career information)
		are posted beside, feel free to click them to be used.
		<br/>
			Eg: 
		<b>Worked at </b><span id="m1"> Microsoft </span>
  		<ul>
  		<li>Position: Relations Manager</li>
  			<li>Years of duration: 5 years [2010-2015]</li>
  		<li>Job Description: Handled the VC operations, HR Interviews and as an associate in Marketing Strategies.</li>
  	</ul> 
	</div>
</div>


<!-- FORM STARTS HERE -->
	<form method="post" action="/WT_NEW/PG7_FORM2C/form_page2contd.php">
	<div class="row">
			<div class="cols6" id="t2">
        <textarea class="mceEditor" name="work_exp" id="myarea1">Enter your data or use some of our helpful points beside!</textarea>
			</div>
			<div class="cols6" id="t3">
				<span style="font-family:'Trebuchet MS'; font-size:20px"> Click any of the options below : </span><hr>
			</div>
	</div>
	<br>
	<br>
	<br>
		<div style="margin-bottom:-30px;margin-top:-30px;">
			<input class="button" type="submit" name="submit" value="Next" id="submit"/>
		</div>
	</form>
<!-- FORM ENDS HERE! -->
<br>
<br>
<br>
<br>
<br>


	<!-- 	tinymce.activeEditor.execCommand('mceInsertContent', false, d1.innerHTML);-->
	
	<!--	student-engineering: se ; student-architects: sa ; student-govt :sg ; student-healthcare : sh ,
				entry-level - engineering: ee ;	entry-level-architects: ea ; entry-level-govt: eg ; entry-level-healthcare : eh,
				experienced-engineering: exe ; experienced-architects: exa ; experienced-govt :exg ; experienced-healthcare : exh ,
				manager-engineering: me ; manager-architects: ma ; manager-govt :mg ; manager-healthcare : mh .
	-->
<script type="text/javascript">	
	function fun1(){
		var opt2 = sessionStorage.getItem("opt2");
		var cc1 = sessionStorage.getItem("career_clicked");
		
		
		var t3=document.getElementById("t3");
		var text =document.getElementById("myarea1");
		//STUDENT ARRAYS
		var se_civ=['Performed data analysis and provided recommendations to achieve [goal].','Played key role in designing [project] that resulted in [positive outcome].','Saved 8% on supply costs by working closely with suppliers to ensure that all components met department quality standards.','Reduced amount of scrap product waste, saving 70,000 pounds of material per year, lowering shipping costs by $40,000 annually.','Spearheaded development of Quality Control and Management Department.','Created assembly and layout drawings using AutoCAD 2007 and SolidWorks 2005 technology.','Created design layouts and part drawings using orthographic 3rd angle projection.','Created design layouts and part drawings using orthographic 3rd angle projection.'];
		var se_cse=['Wrote maintainable and extensible code in a team environment.','Implemented designs, including experimentation and multiple iterations.','Modified existing software to correct errors, upgrade interfaces and improve performance.','Stored, retrieved and manipulated data for close analysis of system capabilities.','Worked closely with other team members to plan, design and develop robust solutions in a timely manner.','Worked effectively with design teams to ensure software solutions elevated client side experience.','Directed software design and development while remaining focused on client needs.','Rapidly prototyped new capabilities to confirm feasibility.'];
		var se_ece=['Rendered technical drawings and electrical systems specifications that exceeded company standards.','Performed in-depth electrical acceptance testing of completed hardware, including continuity and high potential isolation testing.','Monitored the manufacture of electrical devices and operations to ensure compliance with safety protocols.','Troubleshot electrical equipment problems such as electro-valves and sensors.','Continually improved methods and procedures for processes, measurement, documenting and work flow techniques.','Initiated a project management knowledge study and subsequently standardized project management practices.','Collaborated successfully with cross-functional development teams to design and manufacture new products.','Applied principles of electrical theory to advance and improve product development and efficiency.'];
		var se_me=['Analyzed mechanical requirements to determine feasibility of design.','Collaborated with clients, architects, engineers, contractors and sub-consultants.','Prepared design reports.','Ensured compliance with product specifications and standards requirements.','Performed thermal, electromagnetic, dynamic and structural engineering analyses.','Prepared, checked and coordinated documentation to support component design and application.','Promoted Design for Manufacturability philosophy.','Provided technical direction to other engineers, designers and technicians.']
		var sa=['Reviewed project goals and objectives with the project manager and design team.','Analyzed project feasibility and costs prior to drafting designs.','Completed comprehensive code compliance evaluations.','Discussed zoning laws, fire regulations and building codes with healthcare and governing agencies.','Coordinated with segment leaders to promote architectural goals and design concepts','Coordinated with segment leaders to promote architectural goals and design concepts.','Devised overall strategy for documentation and identified the sheets planned for each stage of the work.','Managed and led a multi-disciplinary team throughout development and contract document phases.'];
		var sg=['Achieved [revenue or departmental objective] by [actions taken].','Implemented marketing strategies which resulted in 12% growth of customer base.','Initiated two key partnerships which resulted in 54% revenue growth.','Developed new process for employee evaluation which resulted in marked performance improvements.','Responsible for creative design for prominent [project].','Responsible for creative design for prominent [project].','Worked directly with [departments, clients, management] to achieve [result].','Researched and updated all required materials needed for firm and partners.'];
		var sh=['Appropriately diagnosed and treated a variety of diseases and injuries in a general practice setting.','Ordered and executed diagnostic tests and analyzed diagnostic images to further investigate patient conditions.','Admitted and treated patients as part of the hospital’s 24-hour on-call services.','Consistently improved patient quality of life through surgical procedures, treatments and professional medical counseling.','Continuously maintained proper safety and took precautionary measures to avoid the spread of disease and infection.','Lead hospital prevention and health promotions to increase awareness of health related issues.','Participated in planning of hospice care for elderly and disabled patients.','Admitted and treated patients as part of the hospital’s 24-hour on-call services.'];
		//EXPERIENCED ARRAYS
		var ee_ece=['Implemented and approved design control procedures for electrical development in accordance with FDA guidelines.','Mentored junior engineers and new hires to better improve the competency and efficiency of all staff.','Designed and approved power distribution requirements for the construction of high tech manufacturing facilities.','Performed in-depth electrical acceptance testing of completed hardware, including continuity and high potential isolation testing.','Monitored the manufacture of electrical devices and operations to ensure compliance with safety protocols.','Troubleshot electrical equipment problems such as electro-valves and sensors.','Promoted Design for Manufacturability philosophy.','Initiated a project management knowledge study and subsequently standardized project management practices.'];
		var ee_cse=['Interfaced with business analysts, developers and technical support to determine the best requirement specifications.','Researched, designed and implemented scalable applications for information identification, extraction, analysis, retrieval and indexing.','Prepared detailed reports concerning project specifications and activities.','Consulted regularly with customers on project status, proposals and technical issues.','Worked closely with other team members to plan, design and develop robust solutions in a timely manner.','Worked effectively with design teams to ensure software solutions elevated client side experience.','Directed software design and development while remaining focused on client needs.','Rapidly prototyped new capabilities to confirm feasibility.'];
		var ee_me=['Analyzed mechanical requirements to determine feasibility of design.','Collaborated with clients, architects, engineers, contractors and sub-consultants.','Prepared design reports.','Ensured compliance with product specifications and standards requirements.','Performed thermal, electromagnetic, dynamic and structural engineering analyses.','Prepared, checked and coordinated documentation to support component design and application.','Promoted Design for Manufacturability philosophy.','Provided technical direction to other engineers, designers and technicians.'];
		var ee_civ=['Drove business growth with positive client relations and staff development.','Prepared flood hazard reports using data from local, state and federal agencies.','Operated large commercial projects under budget with effective management of people and materials.','Edited project reports, specifications, plans, construction schedules, environmental impact studies, permits and designs.','Spearheaded development of Quality Control and Management Department.','Created assembly and layout drawings using AutoCAD 2013 and SolidWorks 2009 technology.','Created design layouts and part drawings using orthographic 3rd angle projection.','Created design layouts and part drawings using orthographic 3rd angle projection.'];
		var ea=['Consulted with clients to determine functional and spatial requirements of the new structure.','Created and updated project cost analysis spreadsheets.','Prepared various exhibits for attorneys for public meetings and legal resolutions.','Coordinated with clients, consultants and contractors during construction bidding.','Coordinated with segment leaders to promote architectural goals and design concepts','Coordinated with segment leaders to promote architectural goals and design concepts.','Devised overall strategy for documentation and identified the sheets planned for each stage of the work.','Managed and led a multi-disciplinary team throughout development and contract document phases.'];
		var eg=['Created boardroom and courtroom multimedia presentations including video and text- sync’d depositions for enhanced understanding.','Obtained documents, clearances, certificates and approvals from local, state and federal agencies.','Assisted various business groups with document organization and dissemination during acquisitions.','Analyzed departmental documents for appropriate distribution and filing.','Responsible for creative design for prominent [project].','Responsible for creative design for prominent [project].','Worked directly with [departments, clients, management] to achieve [result].','Researched and updated all required materials needed for firm and partners.'];
		var eh=['Effectively led teams of junior level physicians, nurses and medical students in caring for inpatient, outpatient, and surgical patients to ensure quality care.','Counseled patients on proper birth control methods and prevention of diseases such as cervical and breast cancer.','Developed open rapport with patients, encouraging them to share questions and concerns.','Consistently improved patient quality of life through surgical procedures, treatments and professional medical counseling.','Frequently conducted research to develop and test surgical techniques that would improve operating procedures and outcomes.','Inspected medical instruments, equipment and operating rooms to maintain proper hygiene and sterility.','Managed, directed and coordinated activities of nurses, assistants, specialists, residents and other medical staff.','Treated pediatric patients with minor illnesses, acute and chronic health problems and growth and development concerns.'];
	
	if((cc1=="student") || (cc1=="entry-level")){ //FOR STUDENTS AND ENTRY-LEVEL
		//ARCHITECTURE
		if((opt2=="Architects") || (opt2=="Urban and Regional Planning")){
			var i='0';
			for(var c in sa){
				i++;
				var newElement=document.createElement('div');
				newElement.innerHTML=sa[c];
				newElement.id=i;
				newElement.style.cursor="pointer";
				newElement.style.margin="4px";
				newElement.style.border="2px dashed black";
				newElement.style.padding="5px";
				newElement.onclick=fun2;
				t3.appendChild(newElement);
			}
		} 
		//GOVERNMENT
		else if ((opt2=="Policy Makers") || (opt2=="Post Office")){
			var i='0';
			for(var c in sg){
				i++;
				var newElement=document.createElement('div');
				newElement.innerHTML=sg[c];
				newElement.id=i;
				newElement.style.cursor="pointer";
				newElement.style.margin="4px";
				newElement.style.border="2px dashed black";
				newElement.style.padding="5px";
				newElement.onclick=fun2;
				t3.appendChild(newElement);
			}
		}
		//HEALTHCARE
		else if((opt2=="Dentistry") || (opt2=="Therapists") || (opt2=="Nursing")){			
			var i='0';
			for(var c in sh){
				i++;
				var newElement=document.createElement('div');
				newElement.innerHTML=sh[c];
				newElement.id=i;
				newElement.style.cursor="pointer";
				newElement.style.margin="4px";
				newElement.style.border="2px dashed black";
				newElement.style.padding="5px";
				newElement.onclick=fun2;
				t3.appendChild(newElement);
			}
		}
		//ENGINEERING
		else{
			switch(opt2){
				case "Civil Engineering":var i='0';
																for(var c in se_civ){
																i++;
																var newElement=document.createElement('div');
																newElement.innerHTML=se_civ[c];
																newElement.id=i;
																newElement.style.cursor="pointer";
																newElement.style.margin="4px";
																newElement.style.border="2px dashed black";
																newElement.style.padding="5px";
																newElement.onclick=fun2;
																t3.appendChild(newElement);
																};break;
				case "Electronics and Communications Engineering":var i='0';
																for(var c in se_ece){
																i++;
																var newElement=document.createElement('div');
																newElement.innerHTML=se_ece[c];
																newElement.id=i;
																newElement.style.cursor="pointer";
																newElement.style.margin="4px";
																newElement.style.border="2px dashed black";
																newElement.style.padding="5px";
																newElement.onclick=fun2;
																t3.appendChild(newElement);
																};break;
				case "Computer Science and Engineering":var i='0';
																for(var c in se_cse){
																i++;
																var newElement=document.createElement('div');
																newElement.innerHTML=se_cse[c];
																newElement.id=i;
																newElement.style.cursor="pointer";
																newElement.style.margin="4px";
																newElement.style.border="2px dashed black";
																newElement.style.padding="5px";
																newElement.onclick=fun2;
																t3.appendChild(newElement);
																};break;
				case "Mechanical Engineering":var i='0';
																for(var c in se_me){
																i++;
																var newElement=document.createElement('div');
																newElement.innerHTML=se_me[c];
																newElement.id=i;
																newElement.style.cursor="pointer";
																newElement.style.margin="4px";
																newElement.style.border="2px dashed black";
																newElement.style.padding="5px";
																newElement.onclick=fun2;
																t3.appendChild(newElement);
																};break;
			}
		}
	}
	else{ //FOR EXPERIENCED AND MANAGERS
		if((opt2=="Architects") || (opt2=="Urban and Regional Planning")){
			var i='0';
			for(var c in ea){
				i++;
				var newElement=document.createElement('div');
				newElement.innerHTML=ea[c];
				newElement.id=i;	
				newElement.style.cursor="pointer";
				newElement.style.margin="4px";
				newElement.style.border="2px dashed black";
				newElement.style.padding="5px";
				newElement.onclick=fun2;
				t3.appendChild(newElement);
			}
		} 
		else if ((opt2=="Policy Makers") || (opt2=="Post Office")){	
			var i='0';
			for(var c in eg){
				i++;
				var newElement=document.createElement('div');
				newElement.innerHTML=eg[c];
				newElement.id=i;
				newElement.style.cursor="pointer";
				newElement.style.margin="4px";
				newElement.style.border="2px dashed black";
				newElement.style.padding="5px";
				newElement.onclick=fun2;
				t3.appendChild(newElement);
			}
		}
		else if((opt2=="Dentistry") || (opt2=="Therapists") || (opt2=="Nursing")){
			var i='0';
			for(var c in eh){
				i++;
				var newElement=document.createElement('div');
				newElement.innerHTML=eh[c];
				newElement.id=i;
				newElement.style.cursor="pointer";
				newElement.style.margin="4px";
				newElement.style.border="2px dashed black";
				newElement.style.padding="5px";
				newElement.onclick=fun2;
				t3.appendChild(newElement);
			}
		}
		else{
			switch(opt2){
				case "Civil Engineering":var i='0';
																for(var c in ee_civ){
																i++;
																var newElement=document.createElement('div');
																newElement.innerHTML=se_me[c];
																newElement.id=i;
																newElement.style.cursor="pointer";
																newElement.style.margin="4px";
																newElement.style.border="2px dashed black";
																newElement.style.padding="5px";
																newElement.onclick=fun2;
																t3.appendChild(newElement);
																};break;
				case "Electronics and Communications Engineering":var i='0';
																for(var c in ee_ece){
																i++;
																var newElement=document.createElement('div');
																newElement.innerHTML=se_me[c];
																newElement.id=i;
																newElement.style.cursor="pointer";
																newElement.style.margin="4px";
																newElement.style.border="2px dashed black";
																newElement.style.padding="5px";
																newElement.onclick=fun2;
																t3.appendChild(newElement);
																};break;
				case "Computer Science and Engineering":var i='0';
																for(var c in ee_cse){
																i++;
																var newElement=document.createElement('div');
																newElement.innerHTML=se_me[c];
																newElement.id=i;
																newElement.style.cursor="pointer";
																newElement.style.margin="4px";
																newElement.style.border="2px dashed black";
																newElement.style.padding="5px";
																newElement.onclick=fun2;
																t3.appendChild(newElement);
																};break;
				case "Mechanical Engineering":var i='0';
																for(var c in ee_me){
																i++;
																var newElement=document.createElement('div');
																newElement.innerHTML=se_me[c];
																newElement.id=i;
																newElement.style.cursor="pointer";
																newElement.style.margin="4px";
																newElement.style.border="2px dashed black";
																newElement.style.padding="5px";
																newElement.onclick=fun2;
																t3.appendChild(newElement);
																};break;
			}
		}
	
	}
	}
	function fun2(event){
		tinymce.activeEditor.execCommand('mceInsertContent', false, "<li>"+event.target.innerHTML+"</li>");
	}
</script>	
	
	
	
	
	
	
<script src="/WT_NEW/PG6_FORM2/editor/js/tinymce/tinymce.min.js"></script>
<script type="text/javascript">
		tinyMCE.init({
		        // General options
		        mode : "specific_textareas",
		        selector : "textarea",
		        height : 300,
		        width : 700,
		        menubar : false,
		        statusbar : true,
		        toolbar : "bold italic | bullist ",
		        fix_list_elements : true
		});
	</script>   
	
	
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
	  
    
  </body>
</html>
