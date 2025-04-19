<?php
include_once'connection.php';
session_start();
if(isset($_POST['submit'])){
	$name=$_POST['name'];
	$gender=$_POST['gender'];
	$age=$_POST['age'];
	$phone=$_POST['phone'];
	$email=$_POST['email'];
	$address=$_POST['address'];
	
	
	$query="INSERT INTO outpatient_details (pid, name, gender, age, phoneno, email, address) VALUES (NULL,'$name','$gender','$age','$phone','$email','$address')";
		$data=mysqli_query($conn,$query);
		if($data){
			header('location:add_patient.php?success=true');
		}
		else 
		{
        header('location:add_patient.php?success=false');
}
}
?>