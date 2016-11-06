<?php
	session_start();
	// i need all details of the user from the database
	// then i need the session variable holding the job experience para
	//	lastly i need the recently entered form variables

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
	
		$univ=array();
		$deg=array();
		$fos=array();
		$gy=array();
		$j='0';
		for($i=0;$i<3;$i++){
			$j++;
			$univ[$i]=$_POST['un'.$j];
			$deg[$i]=$_POST['de'.$j];
			$fos[$i]=$_POST['fos'.$j];
			$gy[$i]=$_POST['gy'.$j];		
		}
		$skill=array();
		$j='0';
		for($i=0;$i<9;$i++){
			$j++;
			$skill[$i]=$_POST['s'.$j];
		}
		
		//ALL PERSONAL VARIABLES
		$fn=$row['fn'];
		$ln=$row['ln'];
		$ci=$row['ci'];
		$st=$row['st'];
		$mp=$row['mp'];
		$email=$row['email'];
		
		//USER ENTERED WORK EXPERIENCE
		$work_exp=$_SESSION['work_exp'];


		//HTML STARTS HERE
		$html="
			asdfalsdkflasdfasdf
		";
		echo $html;
	}
	else{
		echo "<strong>You're not Registered, Please click here to go back to homepage</strong>";
	}
?>
